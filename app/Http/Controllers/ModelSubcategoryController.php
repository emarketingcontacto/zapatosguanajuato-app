<?php

namespace App\Http\Controllers;

use App\Models\ModelSubcategory;
use App\Models\ModelCategory;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModelSubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modelSubcategories = DB::table('modelsubcategory')
        ->join('modelcategory', 'modelsubcategory.modelcatId', '=', 'modelcategory.modelcatId')
        ->select('modelsubcategory.modelsubcatId',
                'modelsubcategory.modelsubcatName',
                'modelcategory.modelcatId',
                'modelcategory.modelcatName')->get();

        return view('ModelSubcategory.index', ['ModelSubcategories'=>$modelSubcategories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $modelcategories = ModelCategory::all();
        return view ('ModelSubcategory.create', ['modelcategories'=> $modelcategories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request);
        $validData = $request->validate(
            [
                'modelsubcatName' => 'required',
                'modelcatId' => 'required | integer '
            ]);

            ModelSubcategory::create($validData);
            return redirect(route('ModelSubcategory.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(ModelSubcategory $modelSubcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModelSubcategory $modelsubcategory)
    {
        //dd($modelsubcategory);
        $modelcategories = ModelCategory::all();
        return view('ModelSubcategory.edit',
        [
            'modelsubcategory' =>$modelsubcategory,
            'modelcategories' => $modelcategories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModelSubcategory $modelsubcategory)
    {
       // dd($modelsubcategory);
       // dd($request);


        $validData = $request->validate(
            [
                'modelsubcatName' => 'required',
                'modelcatId' => 'required | integer '
            ]);

            $modelsubcategory->update($validData);

            return redirect('/ModelSubcategory')->with('success', 'Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModelSubcategory $modelsubcategory)
    {
        $modelsubcategory->delete();

        return redirect('/ModelSubcategory')->with('success', 'Deleted Succesfully');
    }
}
