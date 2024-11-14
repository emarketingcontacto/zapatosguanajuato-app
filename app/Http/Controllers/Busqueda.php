<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Biz;

class Busqueda extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
       $results = DB::table('biz')
       ->select('biz.*','bizcategories.*')
       ->join('bizcategories', 'bizcategories.bizcatId','=','biz.bizcatId')
       ->where('biz.bizName', 'like', '%'.$request->buscar.'%')
       ->get();
        return view('Busqueda',['results'=>$results]);
    }
}
