<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Newuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewuserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Newuser = Newuser::get();
        return view('newuser.index',compact('Newuser'));
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
        // Validate request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'number_of_users' => 'required|integer',
            'email' => 'required|email|max:255',
            'password' => 'nullable|string|max:255',
            'message' => 'required|string|max:255',
        ]);

  
        $newUser = Newuser::create($validatedData);

   
            
        Mail::to('info@example.com')->send(new ContactMail($request)) ;
        return redirect()->back()->with('success', 'message sent successfully.');

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
