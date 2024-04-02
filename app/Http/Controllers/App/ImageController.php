<?php

namespace App\Http\Controllers\App;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $categories = Category::get();
        $projects = Project::get();
        $users= User::get();
        $task = Task::findorfail($id);
        $taskImages = Image::where('task_id',$id)->get();
    
        

      return view('App.taskimage.index',compact('task', 'categories','projects', 'users','taskImages'));  
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        
        $request->validate([
            'images.*' => 'required|image|mimes:png,jpg,jpeg,webp'

        ]);

        $tasks = Task::findorfail($id);

        
        
        $imageData = [];

        if($files = $request->file('images')){

            foreach($files as $key => $file){

                $extension = $file->getClientOriginalExtension();

                $filename = $key.'-'.time().'.'.$extension;

                $path = "uploads/products/";

                $file -> move($path,  $filename );

                $imageData[] = [
                    'task_id' => $tasks->id,
                    'images' => $path.$filename,
                ];
            }
        }

        Image::insert($imageData);
        return redirect()->back()->with('status', "Uploaded Successfully") ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {

        // dd("not wroking");
            $taskimage= Image::findOrFail($id);
            if(File::exists( $taskimage->image)){
                File::delete( $taskimage->image);

            }
            $taskimage->delete();

            return redirect()->back()
                        ->with('success','Task deleted successfully');

    }
}
