<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        if(Auth::check())
        {

            $validator = Validator::make($request->all(),[

            ]);

            if($validator->fails()){
                return redirect()->back()->with('message', 'comment area is mandotory');

            }


            $image=Image::where('id',$request->image_id)->where('is_approved','0')->first();
            if($image){

                Comment::create([
                    'image_id' => $image->id,
                    'user_id'=> Auth::User()->id,
                    'comment_body' =>  $request->comment_body,

                ]);

                return redirect()->back()->with('message','comment success');


            }
            else{
                return redirect()->back()->with('message','no post found');
            }

        }else
        {
            return redirect()->back()->with('message','login in the system');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    //  public function storeemail(Request $request, $id)
    //  {
 
 
    //      $comment = Comment::findOrFail($id);
 
 
    //      $from ='User';
    //      $to = $comment->user->email;
    //      $project_name = $comment->project->title;
    //      $subject = "A New comment ";
    //      $message = "You have been assigned to new comment Given are the Details of the comment";
 
    //      try {
 
    //          Mail::to($to)->send(new TaskAssign($subject, $message,));
 
 
    //          // if (Mail::hasFailures()) {
    //          //     // Handle email sending failure
    //          //     return response()->json(['message' => 'Email sending failed'], 500);
    //          // }
    //          return redirect()->back()->with('success', 'email sent successfully.');
    //      } catch (\Exception $e) {
 
    //          return response()->json(['message' => 'An error occurred while sending the email'], 500);
    //      }
    //  }
 
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
