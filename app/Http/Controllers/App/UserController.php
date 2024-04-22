<?php

namespace App\Http\Controllers\App;



use Illuminate\Http\Request;

use \Illuminate\Validation\Rules;

use App\Http\Controllers\Controller;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('roles')->get();
        return view('app.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {

        $roles = Role::all();
        return view('app.users..create', ['user' => $user, 'roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        //validate
        

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'roles' => 'nullable|array',

            'password' => ['required', 'confirmed', Rules\Password::defaults()::defaults()],

        ]);
        //    dd($validatedData);

        User::create($validatedData);


        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('app.users.edit', ['user' => $user, 'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            // 'role' => 'required',
            'roles' => 'required|array'

        ]);

        //    dd($validatedData);

        $user->update($validatedData);

        $user->roles()->sync($request->input('roles'));


        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */

     public function complete(Request $request, $id)
     {
         $user = User::findOrFail($id);
         $user->update([
             'completed' => true,
             'completed_at' => now(),
         ]);
         return redirect()->back()->with('success', 'left user Removed successfully');
     }

    public function destroy($id)
    {
        $user= User::findOrFail($id);
        $user->delete();

        return redirect()->back()
                        ->with('success','User deleted successfully');


    }

    public function pdf(){

   
        $users = User::get();
   

        $pdf = Pdf::loadView('App.pdf.user',compact('users'));
        return $pdf->download('user.pdf');

      
    }
}
