<?php

namespace App\Http\Controllers\App;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::Latest()->paginate(10);

        return view('App.projects.Layout', compact('projects'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('App.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        //validate the input
        $validatedData = $request->validate([

            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'latitude' => 'nullable',
            'longitude' => 'nullable',

        ]);


        // create a new project in thr database

        Project::create($validatedData);


        //redirect the user and send freindly message
        return redirect()->route('projects.index')->with('success', 'Project created successfully');
    }

    /**
     * Display the specified resource.
     */
    // public function show($id)
    // {

    //     $categories = Category::get();
    //     $project = Project::findOrFail($id);
    //     $tasks = Task::get();
    //     if(!Auth::guard('project_manager')->user()){
    //         if(Auth::user()->id){

    //             $categories = Category::get();
    //             $project = Project::findOrFail($id);

    //             // $tasks = Task::get();

    //             // $tasks = Task::where('user_id', Auth::id())->get();

    //             // $user = Auth::user();
    //             // $tasks =  $user->tasks()->get(); // Assuming you have defined a relationship between User and Task models

    //             $tasks= Task::where('user_id', Auth::user()-> id)->orderBy('id', 'desc');


    //             return view('App.projects.show',compact('project','categories','tasks'));

    //         }
    //     }

    //     return view('App.projects.show',compact('project','categories','tasks'));
    // }

    public function show($id)
    {

        $categories = Category::get();
        $project = Project::findOrFail($id);
        // $tasks = Task::where('completed', false)->orderBy('priority', 'desc')->orderBy('end_date')->get();

        $tasks = Task::where('completed', false)
            ->whereHas('project', function ($query) use ($id) {
                $query->where('id', $id);
            })
            ->orderBy('priority', 'desc')
            ->orderBy('end_date')
            ->get();


        // $tasks = Task::get();




        // $tasks = Task::get();

        // $tasks = Task::where('user_id', Auth::id())->get();

        // $user = Auth::user();
        // $tasks =  $user->tasks()->get(); // Assuming you have defined a relationship between User and Task models


        //for percantage
        $totalTasks = Task::where('project_id', $id)->count();
        $completedTasks = Task::where('project_id', $id)->where('completed', true)->count();
        $completionPercentage = $totalTasks > 0 ? ($completedTasks / $totalTasks) * 100 : 0;


        //for total task in th eproject
        $totalTasks = Task::where('project_id', $id)->count();

        $totalUsers = Task::where('project_id', $id)->distinct('user_id')->count('user_id');
        $manager = User::first();


        return view('App.projects.show', compact('project', 'categories', 'tasks', 'completionPercentage', 'totalTasks', 'totalUsers', 'manager'));
    }



    /**
     * Show the form for editing the specified resource.
     */





    public function edit(Project $project)
    {

        return view('App.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {

        $validatedData = $request->validate([

            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'latitude' => 'nullable',
            'longitude' => 'nullable',

        ]);


        // Update project in thr database

        $project->update($validatedData);

        // $message= "project Updated";

        return redirect()->route('projects.index')->with('success', 'Project Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')
            ->with('success', 'Projectt deleted successfully');
    }


    public function complete(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->update([
            'completed' => true,
            'completed_at' => now(),
        ]);
        return redirect()->back()->with('success', 'Project completed ');
    }

    public function showcompleted()
    {
        $Completedproject = Project::where(
            'completed',
            true
        )->orderBy('completed_at', 'desc')->get();

        return view('App.projects.finishedproject', compact('Completedproject'));
    }

    public function pdf()
    {


        $projects = Project::get();


        $pdf = Pdf::loadView('App.pdf.project', compact('projects'));
        return $pdf->download('project.pdf');
    }
}
