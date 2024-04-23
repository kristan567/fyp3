<?php

namespace App\Http\Controllers\App;

use App\Models\Category;
use App\Models\Chart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Equipment;
use App\Models\Material;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ChartJSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = User::selectRaw("date_format(created_at, '%Y-%m-%d') as date, count(*) as aggregate")
            ->whereDate('created_at', '>=', now()->subDays(30))
            ->groupBy('date')
            ->get();


        $taskdata = Task::selectRaw("date_format(completed_at, '%Y-%m-%d') as date, count(*) as aggregate")
            ->whereDate('completed_at', '>=', now()->subdays(30))
            ->groupBy('date')
            ->get();


        $userdata = User::selectRaw("date_format(completed_at, '%Y-%m-%d') as date, count(*) as aggregate")
            ->whereDate('completed_at', '>=', now()->subdays(30))
            ->groupBy('date')
            ->get();


        $totaluser = User::count();

        $usersWithoutTasks = User::doesntHave('tasks')->get();
        $totalUsersWithoutTasks = User::doesntHave('tasks')->count();

        $userwithtasks = User::has('tasks')->get();
        $totaluserwithtasks = User::has('tasks')->count();


        $categories = Category::get();
        $project = Project::get();
        $tasks = Task::where('completed', false)->orderBy('priority', 'desc')->orderBy('end_date')->get();


        $completedProjectsCount = Project::where('completed', '1')->count();
        $incompleteProjectsCount = Project::where('completed', '0')->count();


    

        $totalTasksByProject = Project::leftJoin('tasks', 'projects.id', '=', 'tasks.project_id')
            ->select('projects.id as project_id')
            ->selectRaw('coalesce(count(tasks.id), 0) as total_tasks')
            ->groupBy('projects.id')
            ->get();

     

        $projectLabels = $totalTasksByProject->pluck('project_id')->toArray();
        $taskCounts = $totalTasksByProject->pluck('total_tasks')->toArray();



  

        $totalTasksByProject = Project::leftJoin('tasks', 'projects.id', '=', 'tasks.project_id')
            ->select('projects.id as project_id')
            ->selectRaw('coalesce(sum(case when tasks.completed = true then 1 else 0 end), 0) as completed_tasks')
            ->selectRaw('coalesce(sum(case when tasks.completed = false then 1 else 0 end), 0) as incomplete_tasks')
            ->groupBy('projects.id')
            ->get();

   



    
        $projectIds = $totalTasksByProject->pluck('project_id')->toArray();
        $completedTaskCounts = $totalTasksByProject->pluck('completed_tasks')->toArray();
        $incompleteTaskCounts = $totalTasksByProject->pluck('incomplete_tasks')->toArray();


        $totalEquipmentCost = DB::table('equipment')->sum(DB::raw('price * qty'));
        $totalMaterialCost = DB::table('materials')->sum(DB::raw('price * qty'));
        $totalCost = $totalEquipmentCost + $totalMaterialCost;





        $equipment = Equipment::all(); 
        $equipmentLabels = $equipment->pluck('name')->toArray();
        $equipmentQuantities = $equipment->pluck('qty')->toArray();

        //    dd($equipmentTypes, $equipmentQuantities);

        $materials = Material::all(); // Assuming Material is your model name
        $materialLabels = $materials->pluck('name')->toArray();
        $materialQuantities = $materials->pluck('qty')->toArray();



        return view('App.Dashboard', compact('data', 'taskdata', 'usersWithoutTasks', 'totalUsersWithoutTasks', 'userwithtasks', 'totaluserwithtasks', 'totaluser', 'categories', 'project', 'tasks', 'completedProjectsCount', 'incompleteProjectsCount', 'projectLabels', 'taskCounts', 'projectIds', 'completedTaskCounts', 'incompleteTaskCounts', 'totalCost',  'equipmentLabels', 'equipmentQuantities', 'materialLabels', 'materialQuantities','userdata'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Chart $chart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chart $chart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chart $chart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chart $chart)
    {
        //
    }
}
