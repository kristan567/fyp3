<?php

namespace App\Http\Controllers\App;
use App\Http\Controllers\Controller;
use App\Models\Recommend;
use Illuminate\Http\Request;

class RecommendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
    

        $recommends = Recommend::get(); 

        $query = Recommend::query();

        // Apply Filters
        if ($request->filled('min_price') && $request->filled('max_price')) {
            $query->whereBetween('price', [$request->min_price, $request->max_price]);
        }
        if ($request->filled('project_types')) {
            $query->whereIn('project_type', $request->project_types);
        }
        if ($request->filled('land_size')) {
            $query->where('land_size', $request->land_size);
        }
        if ($request->filled('time')) {
            $query->where('time', $request->time);
        }

        $filteredData = $query->get();

        return view('App.recommends.recommend')->with('data', $filteredData);
        


    }

    public function create(Request $request)
    {
    

        $recommends = Recommend::get(); 

        $query = Recommend::query();

        // Apply Filters
        if ($request->filled('min_price') && $request->filled('max_price')) {
            $query->whereBetween('price', [$request->min_price, $request->max_price]);
        }
        if ($request->filled('project_types')) {
            $query->whereIn('project_type', $request->project_types);
        }
        if ($request->filled('size')) {
            $query->where('size', $request->size);
        }
        if ($request->filled('duration')) {
            $query->where('duration', $request->duration);
        }

        $filteredData = $query->get();

        return view('App.recommends.recommendlayout')->with('data', $filteredData);
        


    }

    /**
     * Show the form for creating a new resource.
     */
 

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        

       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $recommends = Recommend::findOrFail($id); 
        return view('App.recommends.show',compact('recommends'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
