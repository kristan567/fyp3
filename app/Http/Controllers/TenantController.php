<?php

namespace App\Http\Controllers;

use App\Mail\CreateUser;
use App\Models\Newuser;
use App\Models\Tenant;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use \Illuminate\Validation\Rules;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tenants = Tenant::with('domains')-> get(); 
        return view('tenants.index', ['tenants'=>$tenants]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('tenants.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

       //validate
       $validatedData = $request ->validate([
            'name' => 'required|string|max:255',
            'email'=> 'required|email|max:255',
            'domain_name' => 'required|string|max:255|unique:domains,domain',
            'password' => ['required', 'confirmed', Rules\Password::defaults()::defaults()],
       ]);
    //    dd($validatedData);

       $tenant =  Tenant::create($validatedData);
       
       $tenant->domains()-> create([
            'domain' => $validatedData['domain_name'].'.'.config('app.domain')

       ]);


       return redirect()->route('tenants.index');


    }

    public function storeemail(Request $request, $id)
    {


        $Newuser = Tenant::findOrFail($id);


        $from = 'Field magnet';
        $name = $Newuser->name;
        $to = $Newuser->email;
        $email = $Newuser->email;
        $subject = "Account Creation";
        $password = $Newuser->password;
        $message =  "Mr/Mrs ".$name . " Your New account has been created with following credentials";

        try {

            Mail::to($to)->send(new CreateUser($subject, $message, $name, $password, $email));


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
    public function show(Tenant $tenant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tenant $tenant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tenant $tenant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tenant $tenant)
    {
        //
    }
}
