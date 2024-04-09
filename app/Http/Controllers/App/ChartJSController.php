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


        $totaluser = User::count();

        $usersWithoutTasks = User::doesntHave('tasks')->get();
        $totalUsersWithoutTasks = User::doesntHave('tasks')->count();

        $userwithtasks = User::has('tasks')->get();
        $totaluserwithtasks = User::has('tasks')->count();


        $categories = Category::get();
        $project = Project::get();
        $tasks = Task::where('completed', false)->orderBy('priority', 'desc')->orderBy('end_date')->get();

        // $projectuser = Task::where('project_id')
        //              ->distinct('user_id')
        //              ->count('user_id');

        $completedProjectsCount = Project::where('completed', '1')->count();
        $incompleteProjectsCount = Project::where('completed', '0')->count();


        // Query the database to get the total number of tasks for each project
        $totalTasksByProject = Task::select('project_id')
            ->selectRaw('count(*) as total_tasks')
            ->groupBy('project_id')
            ->get();

        // Prepare data for the chart
        $projectLabels = $totalTasksByProject->pluck('project_id')->toArray();
        $taskCounts = $totalTasksByProject->pluck('total_tasks')->toArray();



        // Query the database to get the total number of completed and incomplete tasks for each project
        $totalTasksByProject = Task::select('project_id')
            ->selectRaw('sum(case when completed = true then 1 else 0 end) as completed_tasks')
            ->selectRaw('sum(case when completed = false then 1 else 0 end) as incomplete_tasks')
            ->groupBy('project_id')
            ->get();

        // Prepare data for the chart
        $projectIds = $totalTasksByProject->pluck('project_id')->toArray();
        $completedTaskCounts = $totalTasksByProject->pluck('completed_tasks')->toArray();
        $incompleteTaskCounts = $totalTasksByProject->pluck('incomplete_tasks')->toArray();


        $totalEquipmentCost = DB::table('equipment')->sum(DB::raw('price * qty'));
        $totalMaterialCost = DB::table('materials')->sum(DB::raw('price * qty'));
        $totalCost = $totalEquipmentCost + $totalMaterialCost;


        $equipmentData = Equipment::all();
        $equipmentTypes = $equipmentData->pluck('type')->toArray();
        $equipmentQuantities = $equipmentData->pluck('qty')->toArray();



        $equipment = Equipment::all(); // Assuming Equipment is your model name
        $equipmentLabels = $equipment->pluck('name')->toArray();
        $equipmentQuantities = $equipment->pluck('qty')->toArray();

        //    dd($equipmentTypes, $equipmentQuantities);

        $materials = Material::all(); // Assuming Material is your model name
        $materialLabels = $materials->pluck('name')->toArray();
        $materialQuantities = $materials->pluck('qty')->toArray();



        return view('App.Dashboard', compact('data', 'taskdata', 'usersWithoutTasks', 'totalUsersWithoutTasks', 'userwithtasks', 'totaluserwithtasks', 'totaluser', 'categories', 'project', 'tasks', 'completedProjectsCount', 'incompleteProjectsCount', 'projectLabels', 'taskCounts', 'projectIds', 'completedTaskCounts', 'incompleteTaskCounts', 'totalCost', 'equipmentTypes', 'equipmentQuantities', 'equipmentLabels', 'equipmentQuantities','materialLabels', 'materialQuantities'));
    }

    // public function taskindex()
    // {
    //     $taskdata = Task::selectRaw("date_format(completed_at, '%Y-%m-%d') as date, count(*) as aggregate")
    //         ->whereDate('completed_at','>=',now()->subdays(30))
    //         ->groupBy('date')
    //         ->get();
    //     return view('App.Dashboard', compact( 'taskdata'));

    // }

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
