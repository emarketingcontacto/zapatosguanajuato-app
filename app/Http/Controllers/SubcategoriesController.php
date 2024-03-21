<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubcategoriesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //dd($request->subcategory);

        $models = DB::table('model')
        ->select('model.modelId', 'model.modelName', 'model.modelPrice',
                'model.modelImage', 'model.bizId', 'modelsubcategory.modelsubcatId',
                'modelsubcategory.modelsubcatName', 'biz.bizName','biz.saletypeId','saletype.saletypeConditions')
        ->join('modelsubcategory', 'model.modelsubcatId', '=','modelsubcategory.modelsubcatId')
        ->join('biz', 'model.bizId', '=','biz.bizId' )
        ->join('saletype', 'biz.saletypeId', '=', 'saletype.saletypeId')

        ->where('modelsubcatName', '=', $request->subcategory)
        ->get();

        return view('Subcategories',['models'=>$models, 'subcategory'=>$request->subcategory]);
    }
}
