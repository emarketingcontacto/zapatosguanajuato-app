<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use App\Models\ModelCategory;
use App\Models\ModelSubcategory;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modelo=DB::table('model')
        ->join('material', 'material.materialId', '=', 'model.materialId')
        ->join('biz', 'biz.bizId','=', 'model.bizId')
        ->join('seasson', 'seasson.seassonId', '=','model.materialId')
        ->join('modelsubcategory', 'modelsubcategory.modelsubcatId', '=', 'model.modelsubcatId')
        ->join('modelcategory', 'modelcategory.modelcatId', '=', 'model.modelcatId')
        ->select(
            'model.*',
            'material.materialName',
            'biz.bizName',
            'seasson.seassonName',
            'modelsubcategory.modelsubcatName',
            'modelcategory.modelcatName'
        )->paginate(20);
        return view('Modelo.index', ['modelos'=>$modelo]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //materials
        $materials=DB::table('material')->get();
        //business
        $business=DB::table('biz')->orderBy('bizName')->get();
        //seassons
        $seassons=DB::table('seasson')->get();
        //modelsubcategory
        $modelsubcategories = ModelSubcategory::all();
        //modelcategory
        $modelcategories = ModelCategory::all();

        return view('Modelo.create',['materials'=>$materials, 'business'=>$business, 'seassons'=>$seassons, 'modelsubcategories'=> $modelsubcategories, 'modelcategories'=>$modelcategories ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request);
        $validData=$request->validate(
            [
                'modelName'=>'nullable',
                'modelImage'=>'required',
                'modelPrice'=>'required|decimal:2',
                'seassonId'=> 'required',
                'bizId'=> 'required',
                'materialId'=>'required',
                'modelsubcatId'=>'required',
                'modelcatId'=>'required'
            ]);

            if($request->hasFile('modelImage')){
                $validData['modelImage']=$request->file('modelImage')->store('modelos','public');
            }
            Modelo::create($validData);

            return redirect(route('Modelo.index'))->with('success', 'Model Created Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Modelo $modelo)
    {
        $material = DB::table('material')->where('materialId', '=', $modelo->materialId)->first();
        $seasson = DB::table('seasson')->where('seassonId', '=', $modelo->seassonId)->first();
        $biz = DB::table('biz')->where('bizId', '=', $modelo->bizId)->first();

       return view('Modelo.show', ['modelo'=>$modelo, 'material'=>$material, 'seasson'=>$seasson, 'biz'=>$biz]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modelo $modelo)
    {
         //materials
         $materials=DB::table('material')->get();
         //business
         $business=DB::table('biz')->orderBy('bizName')->get();
         //seassons
         $seassons=DB::table('seasson')->get();
         //modelsubcategories
         $modelsubcategories = ModelSubcategory::all();
         //modelcategories
         $modelcategories = ModelCategory::all();
         return view('Modelo.edit', ['modelo'=> $modelo, 'materials'=>$materials, 'business'=>$business, 'seassons'=>$seassons , 'modelsubcategories'=>$modelsubcategories, 'modelcategories'=>$modelcategories] );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Modelo $modelo)
    {
        $validData=$request->validate(
            [
                'modelName'=>'required',
                'modelImage'=>'nullable',
                'modelPrice'=>'required|decimal:2',
                'seassonId'=> 'required',
                'bizId'=> 'required',
                'materialId'=>'required',
                'modelsubcatId' => 'required',
                'modelcatId'=>'required'
            ]);
        if($request->hasFile('modelImage')){
            Storage::disk('public')->delete('/public/storage/modelos', $modelo->modelImage);
            $validData['modelImage']= $request->file('modelImage')->store('modelos', 'public');
        }
        $modelo->update($validData);
        return redirect('Modelo')->with('success', 'Modelo Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modelo $modelo)
    {
        $modelo->delete();
        return redirect('Modelo')->with('success', 'Modelo Deleted Succesfully');
    }
}
