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

        //Factories
        $modelsfactories = DB::table('model')
        ->select('model.modelId', 'model.modelName', 'model.modelPrice',
                'model.modelImage', 'model.bizId', 'modelsubcategory.modelsubcatId',
                'modelsubcategory.modelsubcatName', 'biz.bizName','biz.saletypeId','saletype.saletypeConditions',
                'bizcategories.bizcatName')
        ->join('modelsubcategory', 'model.modelsubcatId', '=','modelsubcategory.modelsubcatId')
        ->join('biz', 'model.bizId', '=','biz.bizId' )
        ->join('saletype', 'biz.saletypeId', '=', 'saletype.saletypeId')
        ->join('bizcategories', 'biz.bizcatId', '=', 'bizcategories.bizcatId')

        ->where('modelsubcatName', '=', $request->subcategoria)
        ->where('bizcategories.bizcatName', '=', 'Fabricante')
        ->get();

        //Wholesalers
        $modelsWholesalers = DB::table('model')
        ->select('model.modelId', 'model.modelName', 'model.modelPrice',
                'model.modelImage', 'model.bizId', 'modelsubcategory.modelsubcatId',
                'modelsubcategory.modelsubcatName', 'biz.bizName','biz.saletypeId','saletype.saletypeConditions',
                'bizcategories.bizcatName')
        ->join('modelsubcategory', 'model.modelsubcatId', '=','modelsubcategory.modelsubcatId')
        ->join('biz', 'model.bizId', '=','biz.bizId' )
        ->join('saletype', 'biz.saletypeId', '=', 'saletype.saletypeId')
        ->join('bizcategories', 'biz.bizcatId', '=', 'bizcategories.bizcatId')

        ->where('modelsubcatName', '=', $request->subcategoria)
        ->where('bizcategories.bizcatName', '=', 'Mayorista')
        ->get();

        //Retails
        $modelsRetails = DB::table('model')
        ->select('model.modelId', 'model.modelName', 'model.modelPrice',
                'model.modelImage', 'model.bizId', 'modelsubcategory.modelsubcatId',
                'modelsubcategory.modelsubcatName', 'biz.bizName','biz.saletypeId','saletype.saletypeConditions',
                'bizcategories.bizcatName')
        ->join('modelsubcategory', 'model.modelsubcatId', '=','modelsubcategory.modelsubcatId')
        ->join('biz', 'model.bizId', '=','biz.bizId' )
        ->join('saletype', 'biz.saletypeId', '=', 'saletype.saletypeId')
        ->join('bizcategories', 'biz.bizcatId', '=', 'bizcategories.bizcatId')

        ->where('modelsubcatName', '=', $request->subcategoria)
        ->where('bizcategories.bizcatName', '=', 'Minorista')
        ->get();

        return view('Subcategories',['modelsfactories'=>$modelsfactories,'modelsWholesalers'=>$modelsWholesalers,'modelsRetails'=>$modelsRetails,'subcategoria'=>$request->subcategoria ]);
    }
}
