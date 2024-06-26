<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        // $project = Project::get();
        // $category = category::get();
      
        // return view('App.projects.show',compact('project','category'));
        
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
  

        // dd($request->all());

        $validatedData = $request-> validate([

            'title' => ['required'],
            'description' => ['required'],
            'project_id' => ['required'],
        ]);

        Category::create($validatedData);

        // Assuming 'project_id' is the ID of the project associated with the category
        $projectId = $validatedData['project_id'];

        // Redirect to the 'projects.show' route with the project ID as a parameter
        return redirect()->route('projects.show', $projectId);

       
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
     
    }
        
    

    /**
     * Show the form for editing the specified resource.
     */
    
    public function edit(Category $category)
    {
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validatedData = $request-> validate([

            'title' => 'required',
            'description' => 'required',
            


        ]);
        

        // Update project in thr database

        $category->update($validatedData);

        // $message= "project Updated";
      
        return redirect()->back()->with('success', 'Product Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {


        $category->delete();
      
        return redirect()->back()
                        ->with('success','Product deleted successfully');
       
    }
}
