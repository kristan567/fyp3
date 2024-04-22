<?php

namespace App\Http\Controllers\App;

use App\Mail\TaskAssign;
use App\Mail\TaskComplete;
use App\Models\Task;
use App\Models\Category;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Image;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // task::get();
        // return view('App.Taks.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        // $categories = Category::get();
        // $project = Project::findOrfail($project_id);
        // return view('App.Tasks.create', compact('project', 'categories'));

        $categories = Category::where('project_id', $id)->pluck('title', 'id');  // title was passed using this query in the view file instead of categories as category new process is done where  categories as id=>title is done see their thats all no change in route 




        $project = Project::findOrFail($id);  //passing value in the routes helped
        $users = User::get();
        return view('App.Tasks.create', compact('project', 'categories', 'users'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  dd($request->all());


        $validatedData = $request->validate([
            'title' => 'required',
            'project_id' => 'required',
            'category_id' => 'required',
            'user_id' => 'required|unique:tasks,user_id,NULL,id,start_date,' . $request->start_date . ',end_date,' . $request->end_date,
            'description' => 'required',
            'priority'  =>  'required',
            'status' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ], [
            'user_id.unique' => 'The selected user is already assigned to a task within the specified date range.',
        ]);



        $data = Task::create($validatedData);

        $projectId = $validatedData['project_id'];
        $categoryID = $validatedData['category_id'];
        $userID = $validatedData['user_id'];

        // dd($data);

        return redirect()->route('projects.show', [$projectId, $categoryID, $userID])->with('success', 'Task created successfully.');
    }

    public function storeemail(Request $request, $id)
    {


        $task = Task::findOrFail($id);


        $from = 'Project Manager';
        $name = $task->user->name;
        $project_name = $task->project->title;
        $to = $task->user->email;
        $start_date = $task->start_date;
        $end_date = $task->end_date;
        $priority = $task->priority;
        $task_name = $task->title;
        $des = $task->description;
        $subject = "Task Assigned: " . $task_name;
        $message = "You have been assigned to new task Given are the Details of the task";

        try {

            Mail::to($to)->send(new TaskAssign($subject, $message,$name, $project_name,$task_name,$start_date, $end_date, $priority, $des));


            // if (Mail::hasFailures()) {
            //     // Handle email sending failure
            //     return response()->json(['message' => 'Email sending failed'], 500);
            // }
            return redirect()->back()->with('success', 'email sent successfully.');
        } catch (\Exception $e) {

            return response()->json(['message' => 'An error occurred while sending the email'], 500);
        }
    }


    public function usermail(Request $request, $id)
    {


        $task = Task::findOrFail($id);

        $manager = User::first();


        $from = $task->user->email;

        $name = $task->user->name;
        $project_name = $task->project->title;
        $to = $manager->email;
        $task_name = $task->title;
        $subject = "Task Assigned: " . $task_name;
        $start_date = $task->start_date;
        $end_date = $task->end_date;
        $priority = $task->priority;
        $updated_at = $task->updated_at;
        $des = $task->description;
        $message = "The " . $task_name . " was completed by " . $name . " for Project Name: " . $project_name;


        try {

            Mail::to($to)->send(new TaskComplete($subject, $message,$start_date, $end_date, $priority,$updated_at));


            // if (Mail::hasFailures()) {
            //     // Handle email sending failure
            //     return response()->json(['message' => 'Email sending failed'], 500);
            // }
            return redirect()->back()->with('success', 'email sent successfully.');
        } catch (\Exception $e) {

            return response()->json(['message' => 'An error occurred while sending the email'], 500);
        }
    }




    /**
     * Display the specified resource.
     */
    public function show(Task $id)
    {
        

        $categories = Category::get();
        $projects = Project::get();
        $users = User::get();
        $task = Task::findorfail($id);

        return view('App.Tasks.show', compact('task', 'categories', 'projects', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $categories = Category::get();
        $projects = Project::get();
        $users = User::get();
        $manager = User::first();
        // $taskImages = Image::where('task_id',$task)->findOrFail($task);

   

        return view('App.Tasks.edit', compact('task', 'categories', 'projects', 'users','manager',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {

        $role = Auth::user()->roles->pluck('name')->first();

        if ($role == 'Project Manager') {
            $validatedData = $request->validate([
                'title' => 'required',
                'project_id' => 'required',
                'category_id' => 'required',
                'user_id' => 'required|unique:tasks,user_id,NULL,id,start_date,' . $request->start_date . ',end_date,' . $request->end_date,
                'description' => 'required',
                'priority'  =>  'required',
                'status' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
            ], [
                'user_id.unique' => 'The selected user is already assigned to a task within the specified date range.',
            ]); //this was the change
        } elseif ($role == 'worker') {
            $validatedData = $request->validate([
                'status' => 'required',
            ]);
        }

        // Update the attributes of the task instance
        $task->update($validatedData);

        // Redirect to the appropriate route
        return redirect()->route('projects.show', [
            'project' => $task->project_id,
            'category' => $task->category_id,
            'user' => $task->user_id
        ])->with('success', 'Task updated successfully.');
    }




    public function userupdate(Request $request, Task $task)
    {

        // dd('working');
        $validatedData = $request->validate([

            'title' => 'nullable',
            'project_id' => 'nullable',
            'category_id' => 'nullable',
            'user_id' => 'nullable',
            'description' => 'nullable',
            'priority'  =>  'nullable',
            'status' => 'nullable',
            'start_date' => 'nullable',
            'end_date' => 'nullable',
        ]);




        // Redirect to the appropriate route
        return redirect()->back()->with('success', 'Task updated successfully.');
    }






    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->back()
            ->with('success', 'Task deleted successfully');
    }

    public function complete(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update([
            'completed' => true,
            'completed_at' => now(),
        ]);
        return redirect()->back()->with('success', 'Task completed successfully');
    }

    public function showcompleted($id)
    {

        $project = Project::findOrFail($id);
        $Completedtask = Task::where(
            'completed',
            true
        )->orderBy('completed_at', 'desc')->get();

        return view('App.Tasks.taskshow', compact('Completedtask', 'project'));
    }

    public function pdf($id){

        $categories = Category::get();
        $project = Project::findOrFail($id);
        $tasks = Task::where('completed', false)->orderBy('priority', 'desc')->orderBy('end_date')->get();

        $pdf = Pdf::loadView('App.pdf.task',compact('categories','project','tasks'));
        return $pdf->download('task.pdf');

       

    }
}
