<?php

use App\Http\Controllers\Api\v1\ApiBizController;
use App\Http\Controllers\Api\v1\LikesController;
use App\Http\Resources\ApiBizResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Biz;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('v1')->group(function (){
    Route::apiResource('/likes', LikesController::class);
});

Route::get('/v1/ApiBiz', [ApiBizController::class, 'index']);

Route::get('/v1/ApiBiz/{bizId}', function($bizId){
    $biz=DB::table('biz')
    ->join('bizcategories','bizcategories.bizcatId','=', 'biz.bizcatId')
    ->select('bizcategories.bizcatName', 'biz.bizcatId')
    ->where('biz.bizId', $bizId)
    ->get();
    return $biz;
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
