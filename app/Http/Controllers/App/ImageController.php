<?php

namespace App\Http\Controllers\App;

use App\Mail\VerifyImage;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $categories = Category::get();
        // $project = Project::findOrFail($id);
        $project = Project::get();
        $users= User::get();
        $task = Task::findorfail($id);
        $taskImages = Image::where('task_id',$id)->get();
        // $manager = User::first();
    

        
        

      return view('App.taskimage.index',compact('task', 'categories','project', 'users','taskImages'));  
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function back($id){

        $categories = Category::get();
        $project = Project::findorfail($id);    
        $users= User::get();
        $tasks = Task::findorfail($id);

        $totalTasks = Task::where('project_id', $id)->count();
        $completedTasks = Task::where('project_id', $id)->where('completed', true)->count();
        $completionPercentage = $totalTasks > 0 ? ($completedTasks / $totalTasks) * 100 : 0;


        //for total task in th eproject
        $totalTasks = Task::where('project_id', $id)->count();

        $totalUsers = Task::where('project_id', $id)->distinct('user_id')->count('user_id');
        $manager = User::first();
        

        return view('App.projects.show',compact('project', 'categories', 'tasks','users','completionPercentage','totalTasks','totalUsers','manager'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {

      
        $validatedData = $request->validate([

           'reason'=>'nullable',

        ]);


        // // create a new project in thr database

        // Image::insert($validatedData);
      
        
        $request->validate([
            'images.*' => 'required|image|mimes:png,jpg,jpeg,webp',
            'reason'=>'required',

        ]);

      

        $tasks = Task::findorfail($id);
        $project = Project::get();

        
        
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
                    'reason' => $validatedData['reason'],
                ];
            }
        }

        $ans=Image::insert($imageData);
        // dd($ans);
        return redirect()->back()->with('status', "Uploaded Successfully") ;
    }


    public function complete(Request $request, $id)
    {
        $image = Image::findOrFail($id);
        $image->update([
            'is_approved' => true,
            // 'completed_at' => now(),
        ]);
        return redirect()->back()->with('success', ' the imag has been verified');
    }

    public function storeemail(Request $request, $id)
    {


        $taskImage = Image::findOrFail($id);

        


        $from= 'project manager';
        $to = $taskImage->task->user->email;
        $task_name = $taskImage->task->title;
        $subject = "Task Assigned: " . $task_name;
        $message = "The Image you have uploaded has been verified by:" .$from.  " for the task: ".$task_name." you can change the task status" ;

        // dd($task_name);

        try {

            Mail::to($to)->send(new VerifyImage($subject, $message,));


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
