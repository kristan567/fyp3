<?php

namespace App\Http\Controllers\App;

use App\Mail\CommentImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Image;
use Egulias\EmailValidator\Result\Reason\CommentsInIDRight;
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
        // $comments = Comment::get();
        // return view('App.taskimage.index',compact('comments'));
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

                $comment = Comment::create([
                    'image_id' => $image->id,
                    'user_id'=> Auth::User()->id,
                    'comment_body' =>  $request->comment_body,

                ]);

                dd($comment);

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
    //     dd('working');
 
 
    //      $comment = Comment::findOrFail($id);
 
 
    //      $from ='User';
    //      $to = $comment->user->email;
    
    //      $subject = "A New comment ";
    //      $message = "You have been assigned to new comment Given are the Details of the comment";
 
    //      try {
 
    //          Mail::to($to)->send(new CommentImage($subject, $message,));
 
 
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
    public function destroy(Request $request)
    {
        if(Auth::check())
        {
            $comment=Comment::where('id',$request->comment_id)->where('user_id',Auth::user()->id)
            ->first();

            if($comment){

                    $comment->delete();

                return response()->json([
                    'status' => 200,
                    'message' => 'comment Deleted Successfully'
                ]);

            }else{
                return response()->json([
                    'status' => 500,
                    'message' => 'Something went Wrong'
                ]);
            }
            


        }else{

        }
    }
}
