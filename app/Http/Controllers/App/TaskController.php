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
            'user_id' => 'required',
            'description' => 'required',
            'priority'  =>  'required',
            'status' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);



        Task::create($validatedData);

        $projectId = $validatedData['project_id'];
        $categoryID = $validatedData['category_id'];
        $userID = $validatedData['user_id'];

        return redirect()->route('projects.show', [$projectId, $categoryID, $userID])->with('success', 'Task created successfully.');
    }

    public function storeemail(Request $request, $id)
    {


        $task = Task::findOrFail($id);


        $from = 'Project Manager';
        $name = $task->user->name;
        $project_name = $task->project->title;
        $to = $task->user->email;
        $task_name = $task->title;
        $subject = "Task Assigned: " . $task_name;
        $message = "You have been assigned to the task of: " . $task_name . " by " . $from . " for Project Name: " . $project_name;

        try {

            Mail::to($to)->send(new TaskAssign($subject, $message,));


            // if (Mail::hasFailures()) {
            //     // Handle email sending failure
            //     return response()->json(['message' => 'Email sending failed'], 500);
            // }
            return response()->json(['message' => 'Email sent successfully'], 200);
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
        $message = "The " . $task_name . " was completed by " . $name . " for Project Name: " . $project_name;


        try {

            Mail::to($to)->send(new TaskComplete($subject, $message));


            // if (Mail::hasFailures()) {
            //     // Handle email sending failure
            //     return response()->json(['message' => 'Email sending failed'], 500);
            // }
            return response()->json(['message' => 'Email sent successfully'], 200);
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

   

        return view('App.Tasks.edit', compact('task', 'categories', 'projects', 'users','manager'));
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
                'user_id' => 'required',
                'description' => 'required',
                'priority'  =>  'required',
                'status' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
            ]);
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
}
