<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Girls extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
         //variables
        $modelcategory = 'Niñas';

        //get modelcatImage
        $modelcat = DB::table('modelcategory')
        ->where('modelcategory.modelcatName', '=', $modelcategory)
        ->first();

        //Factories
        $factories = DB::table('model')
        ->join ('biz', 'biz.bizId', '=','model.bizId')
        ->join('bizcategories', 'bizcategories.bizcatId', '=', 'biz.bizcatId')
        ->join('modelcategory', 'modelcategory.modelcatId', '=', 'model.modelcatId')
        ->where('bizcategories.bizcatName', '=', 'Fabricante')
        ->where('modelcategory.modelcatName', '=', $modelcategory)
        ->get();

        //Wholesalers
        $wholesalers = DB::table('model')
        ->join ('biz', 'biz.bizId', '=','model.bizId')
        ->join('bizcategories', 'bizcategories.bizcatId', '=', 'biz.bizcatId')
        ->join('modelcategory', 'modelcategory.modelcatId', '=', 'model.modelcatId')
        ->where('bizcategories.bizcatName', '=', 'Mayorista')
        ->where('modelcategory.modelcatName', '=', $modelcategory)
        ->get();

        //Retails
        $retails = DB::table('model')
        ->join ('biz', 'biz.bizId', '=','model.bizId')
        ->join('bizcategories', 'bizcategories.bizcatId', '=', 'biz.bizcatId')
        ->join('modelcategory', 'modelcategory.modelcatId', '=', 'model.modelcatId')
        ->where('bizcategories.bizcatName', '=', 'Minorista')
        ->where('modelcategory.modelcatName', '=', $modelcategory)
        ->get();

        return view('Girls', ['modelcat'=>$modelcat,'factories'=>$factories,'wholesalers'=>$wholesalers,'retails'=>$retails]);
    }
}
