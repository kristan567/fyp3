<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Equipment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $equipments = Equipment::orderBy('created_at','Desc')->get();
        $totalCost = DB::table('equipment')->sum(DB::raw('price * qty'));
        return view('App.equipments.index',compact('equipments', 'totalCost'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('App.equipments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $rules = [

            'name' => 'required|min:5',
            'type' => 'required',
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric'],
            'qty' => ['required', 'integer']



        ];

        if ($request->image != "") {
            $rules['image'] = 'image';
        }



        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('equipments.create')->withInput()->withErrors($validator);
        }


        $equipment = new Equipment();
        $equipment->name = $request->name;
        $equipment->type = $request->type;
        $equipment->price =  $request->price;
        $equipment->qty = $request->qty;
        $equipment->description =  $request->description;
        $equipment->save();



        if ($request->image != "") {
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;   //unique image name

            $equipment->image = $imageName;
            $equipment->save();

            $image->move(public_path('equipmentuploads/equipmentproducts'), $imageName);
        }

        return redirect()->route('equipments.index')->with('success', 'Equipment added Successfully.');
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
        $equipment=Equipment::findOrFail($id);
        return view('App.equipments.edit',compact('equipment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $equipment=Equipment::findOrFail($id);

        $rules = [

            'name' => 'required|min:5',
            'type' => 'required',
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric'],
            'qty' => ['required', 'integer']



        ];

        if ($request->image != "") {
            $rules['image'] = 'image';
        }



        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('equipments.edit',$equipment->id)->withInput()->withErrors($validator);
        }


  
        $equipment->name = $request->name;
        $equipment->type = $request->type;
        $equipment->price =  $request->price;
        $equipment->qty = $request->qty;
        $equipment->description =  $request->description;
        $equipment->save();



        if ($request->image != "") {

            File::delete(public_path('equipmentuploads/equipmentproducts/'.$equipment->image));

            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;   //unique image name

            $equipment->image = $imageName;
            $equipment->save();

            $image->move(public_path('equipmentuploads/equipmentproducts'), $imageName);
        }

        return redirect()->route('equipments.index')->with('success', 'Equipment Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $equipment = Equipment::findOrFail($id);

        //delete from the file 
        
        File::delete(public_path('equipmentuploads/equipmentproducts'.$equipment->image));

        //delete from the database
        $equipment->delete();

        return redirect()->route('equipments.index')->with('success', 'Equipment deleted Successfully.');


    }
}
