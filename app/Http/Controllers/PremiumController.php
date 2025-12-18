<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Premium;
use App\Models\Biz;
use App\Models\Bizcategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Client\RequestException;
use PhpParser\Node\Stmt\TryCatch;

class PremiumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //select join
        $premiums = DB::table('premium')
        ->join('biz','biz.bizId','=','premium.bizId' )
        ->join('bizcategories', 'bizcategories.bizcatId', '=','biz.bizcatId')
        ->select(
            'biz.bizId',
            'biz.bizName',
            'bizcategories.bizcatName',
            'premium.*')->get();
            return view('Premium.index', ['premiums'=>$premiums]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bizness = Biz::all();
        return view('Premium.create', ['bizness'=>$bizness]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);

        //variables
        $routeRedirect = "";
        $premiumPeriod = $request->premiumPeriod;

        try {
            $validData = $request->validate([
                'bizId'=>'required',
                'premiumStart'=>'required',
                'premiumEnd'=>'required'
            ]);

            Premium::create($validData);

        } catch (\Illuminate\Http\Client\RequestException $e) {
            //throw exception;
            $routeRedirect = route('Premium.create');
            return redirect('Premium.create')->withErrors($e);
        }

        if($premiumPeriod == "1mes"){
            $routeRedirect = "https://buy.stripe.com/9B65kFctjcO5aM9gW52VG03";
        }elseif ($request->premiumPeriod == "1año") {
            $routeRedirect = "https://buy.stripe.com/6oU4gB8d3cO5dYldJT2VG05";
        } else {
            $routeRedirect(route('welcome'));
        }

        return redirect($routeRedirect);
    }

    /**
     * Display the specified resource.
     */
    public function show(Premium $premium)
    {
        //dd($premium);
        $pemiumAll= DB::table('premium')
        ->join('biz','biz.bizId', '=', 'premium.bizId' )
        ->join('bizcategories', 'bizcategories.bizcatId', '=', 'biz.bizcatId')
        ->select('premium.*', 'biz.bizName', 'biz.bizcatId', 'bizcategories.bizcatName')
        ->where('premium.premiumId', '=', $premium->premiumId)->first();

        return view('Premium.show', ['premiumAll'=>$pemiumAll]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Premium $premium)
    {
        //dd($premium);
         $premiumAll= DB::table('premium')
        ->join('biz','biz.bizId', '=', 'premium.bizId' )
        ->join('bizcategories', 'bizcategories.bizcatId', '=', 'biz.bizcatId')
        ->select('premium.*', 'biz.bizName', 'biz.bizcatId', 'bizcategories.bizcatName')
        ->where('premium.premiumId', '=', $premium->premiumId)->first();

        return view('Premium.edit', ['premiumAll'=>$premiumAll]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Premium $premium)
    {
        //dd($request);
        //dd($premium);
        $validData = $request->validate([
             'bizId'=>'required',
            'premiumStart'=>'required',
            'premiumEnd'=>'required'
        ]);
        $premium->update($validData);
        return redirect('Premium')->with('Success', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Premium $premium)
    {
        //dd($premium);
        //$premium->delete();
        return redirect('Premium')->with('success', 'Deleted Successfully');
    }
}
