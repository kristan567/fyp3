<?php

namespace App\Http\Controllers\App;

use App\Models\Category;
use App\Models\Chart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
            ->whereDate('completed_at','>=',now()->subdays(30))
            ->groupBy('date')
            ->get();


            $totaluser = User::count();

            $usersWithoutTasks = User::doesntHave('tasks')->get();
            $totalUsersWithoutTasks = User::doesntHave('tasks')->count();

            $userwithtasks = User::has('tasks')->get();
            $totaluserwithtasks = User::has('tasks')->count();


            $categories = Category::get();
        $project = Project::get();
        $tasks= Task::where('completed',false)->orderBy('priority','desc')->orderBy('end_date')->get();

        return view('App.Dashboard', compact('data','taskdata','usersWithoutTasks','totalUsersWithoutTasks','userwithtasks','totaluserwithtasks','totaluser','categories','project','tasks'));
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
