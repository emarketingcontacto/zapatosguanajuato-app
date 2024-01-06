<?php

namespace App\Http\Controllers;

use App\Models\ModelCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Return_;

class ModelCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return view('BizCategory.index'
        return view('ModelCategory.index', ['ModelCategories' => ModelCategory::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ModelCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->modelcatImage);
        // Validation
        $validData= $request->validate(
            [
                'modelcatName' =>'required',
                'modelcatImage' =>'required',
            ]);

        //Images saving
        if($request->hasFile('modelcatImage')){
            $validData['modelcatImage'] = $request->file('modelcatImage')->store('logos', 'public');
        }
        ModelCategory::create($validData);
        return redirect('ModelCategory')->with('success', 'Inserted succesfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ModelCategory $modelCategory)
    {
        return view('ModelCategory.show', ['modelcategory'=>$modelCategory]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModelCategory $modelCategory)
    {
        //dd($modelCategory);
        return view('ModelCategory.edit', ['modelCategory'=>$modelCategory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModelCategory $modelCategory)
    {
        // dd($request->modelcatImage);
        // dd($modelCategory->modelcatImage);
        // Validation
        $validData= $request->validate(
            [
                'modelcatName' =>'required',
            ]);

            if($request->hasFile('modelcatImage')){
                //Borra Arriba OK
                Storage::disk('public')->delete('/public/storage/logos', $modelCategory->modelcatImage);
                $validData['modelcatImage'] = $request->file('modelcatImage')->store('logos', 'public');
            }

        $modelCategory->update($validData);
        return redirect('ModelCategory')->with('success' , 'Updated Succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModelCategory $modelCategory)
    {
        Storage::disk('public')->delete('/public/storage/logos', $modelCategory->modelcatImage);
        $modelCategory->delete();
        return redirect('ModelCategory')->with('success' , 'Deleted Succesfully!');

    }
}
