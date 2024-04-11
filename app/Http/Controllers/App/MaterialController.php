<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Material;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materials = Material::orderBy('created_at','Desc')->get();
        $totalCost = DB::table('materials')->sum(DB::raw('price * qty'));

        return view('App.materials.index',compact('materials','totalCost'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('App.materials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [

            'name' => 'required|min:5',
            'sku' => 'required|min:5',
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric'],
            'qty' => ['required', 'integer']



        ];

        if ($request->image != "") {
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('materials.create')->withInput()->withErrors($validator);
        }

        //this is for inserting data
        // Material::create($validator->validated());



        //for image
        $material = new Material();
        $material->name = $request->name;
        $material->sku = $request->sku;
        $material->price=  $request->price;
        $material->qty= $request->qty;
        $material->description=  $request->description;
        $material->save();

        if ($request->image != "") {
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;   //unique image name

            //save image to product directory
            $image->move(public_path('materialuploads/materialproducts'), $imageName);
            //insert the image path in database
            $material->image = $imageName;
            $material->save();
        }

        return redirect()->route('materials.index')->with('success', 'material added Successfully.');

        //storing

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

        $material = Material::findOrFail($id);


        return view('App.materials.edit',compact('material'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {

        $material = Material::findOrFail($id);
        
        $rules = [

            'name' => 'required|min:5',
            'sku' => 'required|min:5',
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric'],
            'qty' => ['required', 'integer']



        ];

        if ($request->image != "") {
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('materials.edit',$material->id)->withInput()->withErrors($validator);
        }

        //this is for inserting data
        // Material::create($validator->validated());



        //for image
        // $material = new Material();
        $material->name = $request->name;
        $material->sku = $request->sku;
        $material->price=  $request->price;
        $material->qty= $request->qty;
        $material->description=  $request->description;
        $material->save();

        if ($request->image != "") {
            File::delete(public_path('materialuploads/materialproducts/'.$material->image));

            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;   //unique image name

            //save image to product directory
            $image->move(public_path('materialuploads/materialproducts'), $imageName);
            //insert the image path in database
            $material->image = $imageName;
            $material->save();
        }

        return redirect()->route('materials.index')->with('success', 'material updated Successfully.');

        //storing
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $material = Material::findOrFail($id);

        //delete from the file 
        
        File::delete(public_path('materialuploads/materialproducts/'.$material->image));

        //delete from the database
        $material->delete();

        return redirect()->route('materials.index')->with('success', 'material deleted Successfully.');



    }

    public function pdf(){

   
        $materials = Material::get();
        $totalCost = DB::table('materials')->sum(DB::raw('price * qty'));
   

        $pdf = Pdf::loadView('App.pdf.material',compact('materials','totalCost'));
        return $pdf->download('material.pdf');

      
    }
}
