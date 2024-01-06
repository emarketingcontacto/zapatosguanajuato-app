<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Bizcategory;


class Wholesalers extends Controller
{

    public function __invoke(Request $request)
    {
        $business = DB::table('biz')
        ->join ('bizcategories', 'biz.bizcatId', '=', 'bizcategories.bizcatId')
        ->join('saletype', 'biz.saletypeId', '=', 'saletype.saletypeId')
        ->select(
            'biz.*',
            'bizcategories.bizcatName',
            'saletype.saletypeName')
        ->where('bizcategories.bizcatName', '=', 'Mayorista')->get();

        $bizcat = Bizcategory::where('bizcatName', 'Mayorista')->first();

        return view('Wholesalers', ['business'=>$business,'bizcat' => $bizcat]);
    }
}
