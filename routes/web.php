<?php

use App\Http\Controllers\Men;
use App\Models\ModelCategory;
use App\Http\Controllers\Kids;
use App\Http\Controllers\Girls;
use App\Http\Controllers\Ladies;
use App\Http\Controllers\Retails;
use App\Http\Controllers\Busqueda;
use App\Http\Controllers\Factories;
use App\Http\Controllers\Wholesalers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BizController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\SeassonController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SaleTypeController;
use App\Http\Controllers\BizCategoryController;
use App\Http\Controllers\ModelCategoryController;
use App\Http\Controllers\SubcategoriesController;
use App\Http\Controllers\ModelSubcategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Home
Route::get('/', function () { return view('welcome');})->name('welcome');
//AboutUs
Route::get('/Acerca-de-nosotros', function (){ return view('About-us'); })->name('acerca_de_nosotros');
//PrivacyPolicy
Route::get('/Politica-de-privacidad', function (){ return view('Privacy-policy'); })->name('politica_privacidad');
//Como funciona
Route::get('/Como_funciona', function (){ return view('Como_funciona'); })->name('como_funciona');
//BizCategories
Route::get('/BizCategory', [BizCategoryController::class,'index'])->name('BizCategory.index');
// Create
Route::get('/BizCategory/create', [BizCategoryController::class,'create'])->name('BizCategory.create');
//POST
Route::post('/BizCategory', [BizCategoryController::class,'store'])->name('BizCategory.store');
//EDIT
Route::get('/BizCategory/{bizcategory}/edit', [BizCategoryController::class,'edit'])->name('BizCategory.edit');
//UPDATE
Route::put('/BizCategory/{bizcategory}/update', [BizCategoryController::class,'update'])->name('BizCategory.update');
//DELETE
Route::delete('/BizCategory/{bizcategory}/destroy', [BizCategoryController::class,'destroy'])->name('BizCategory.destroy');

//ModelCategories
Route::get('/ModelCategory', [ModelCategoryController::class,'index'])->name('ModelCategory.index');
// Create
Route::get('/ModelCategory/create', [ModelCategoryController::class,'create'])->name('ModelCategory.create');
//Store
Route::post('/ModelCategory', [ModelCategoryController::class,'store'])->name('ModelCategory.store');
//Show
Route::get('/ModelCategory/{modelCategory}/show', [ModelCategoryController::class,'show'])->name('ModelCategory.show');
//Edit
Route::get('/ModelCategory/{modelCategory}/edit', [ModelCategoryController::class,'edit'])->name('ModelCategory.edit');
//UPDATE
Route::put('/ModelCategory/{modelCategory}/update', [ModelCategoryController::class,'update'])->name('ModelCategory.update');
//DELETE
Route::delete('/ModelCategory/{modelCategory}/destroy', [ModelCategoryController::class,'destroy'])->name('ModelCategory.destroy');

/*Seasson */
//INDEX
Route::get('/Seasson', [SeassonController::class,'index'])->name('Seasson.index');
// Create
Route::get('/Seasson/create', [SeassonController::class,'create'])->name('Seasson.create');
//Store
Route::post('/Seasson', [SeassonController::class,'store'])->name('Seasson.store');
//Edit
Route::get('/Seasson/{seasson}/edit', [SeassonController::class,'edit'])->name('Seasson.edit');
//UPDATE
Route::put('/Seasson/{seasson}/update', [SeassonController::class,'update'])->name('Seasson.update');
//DELETE
Route::delete('/Seasson/{seasson}/destroy', [SeassonController::class,'destroy'])->name('Seasson.destroy');

/*Materials*/
//INDEX
Route::get('/Material', [MaterialController::class,'index'])->name('Material.index');
// Create
Route::get('/Material/create', [MaterialController::class,'create'])->name('Material.create');
//Store
Route::post('/Material', [MaterialController::class,'store'])->name('Material.store');
//Edit
Route::get('/Material/{material}/edit', [MaterialController::class,'edit'])->name('Material.edit');
//UPDATE
Route::put('/Material/{material}/update', [MaterialController::class,'update'])->name('Material.update');
//DELETE
Route::delete('/Material/{material}/destroy', [MaterialController::class,'destroy'])->name('Material.destroy');

/*Subcategories */
//INDEX
Route::get('/ModelSubcategory', [ModelSubcategoryController::class,'index'])->name('ModelSubcategory.index');
// Create
Route::get('/ModelSubcategory/create', [ModelSubcategoryController::class,'create'])->name('ModelSubcategory.create');
//Store
Route::post('/ModelSubcategory', [ModelSubcategoryController::class,'store'])->name('ModelSubcategory.store');
//Edit
Route::get('/ModelSubcategory/{modelsubcategory}/edit', [ModelSubcategoryController::class,'edit'])->name('ModelSubcategory.edit');
//update
Route::put('/ModelSubcategory/{modelsubcategory}/update', [ModelSubcategoryController::class,'update'])->name('ModelSubcategory.update');
//Delete
Route::delete('/ModelSubcategory/{modelsubcategory}/destroy', [ModelSubcategoryController::class,'destroy'])->name('ModelSubcategory.destroy');

/* SaleTypes */
//index
Route::get('/SaleType', [SaleTypeController::class,'index'])->name('SaleType.index');
// Create
Route::get('/SaleType/create', [SaleTypeController::class,'create'])->name('SaleType.create');
//Store
Route::post('/SaleType', [SaleTypeController::class,'store'])->name('SaleType.store');
//Edit
Route::get('/SaleType/{saletype}/edit', [SaleTypeController::class,'edit'])->name('SaleType.edit');
//update
Route::put('/SaleType/{saletype}/update', [SaleTypeController::class,'update'])->name('SaleType.update');
//Delete
Route::delete('/SaleType/{saletype}/destroy', [SaleTypeController::class,'destroy'])->name('SaleType.destroy');

/* Biz */
//index
Route::get('/Biz', [BizController::class,'index'])->name('Biz.index');
// Create
Route::get('/Biz/create', [BizController::class,'create'])->name('Biz.create');
//Store
Route::post('/Biz', [BizController::class,'store'])->name('Biz.store');
//Show
// Route::get('/Biz/{biz}/show', [BizController::class,'show'])->middleware('auth')->name('Biz.show');
Route::get('/Biz/{biz}/show', [BizController::class,'show'])->name('Biz.show');
//Edit
Route::get('/Biz/{biz}/edit', [BizController::class,'edit'])->name('Biz.edit');
//update
Route::put('/Biz/{biz}/update', [BizController::class,'update'])->name('Biz.update');
//Delete
Route::delete('/Biz/{biz}/destroy', [BizController::class,'destroy'])->name('Biz.destroy');

/*Factories */
//route::get('/Fabricantes', Factories::class)->middleware('auth')->name('Factories');
route::get('/Fabricantes_de_calzado', Factories::class)->name('Fabricantes');

/*Wholesalers */
//route::get('/Mayoristas', Wholesalers::class)->middleware('auth')->name('Wholesalers');
route::get('/Mayoristas_de_calzado', Wholesalers::class)->name('Wholesalers');

/*Retails */
//route::get('/Minoristas', Retails::class)->middleware('auth')->name('Retails');
route::get('/Minoristas_de_calzado', Retails::class)->name('Retails');

/*Ladies*/
route::get('/venta_calzado_damas', Ladies::class)->name('Damas');
/* Men */
route::get('/venta_calzado_hombres', Men::class)->name('Hombres');
/* Kids */
route::get('/venta_calzado_ninos', Kids::class)->name('Ninos');
/* Girls */
route::get('/venta_calzado_ninas', Girls::class)->name('Ninas');


/*Busqueda */
route::get('Busqueda', Busqueda::class)->name('Busqueda');


/*Subcategories*/
//route::get('/Subcategories', SubcategoriesController::class)->middleware('auth')->name('Subcategories');
Route::get('/Subcategories', SubcategoriesController::class)->name('Subcategories');


/*Register */
Route::get('/Register', RegisterController::class)->name('Register');

/*Registration */
//Logout
Route::post('/User/logout', [UserController::class,'logout'])->name('User.logout');
//Login
Route::get('/User/login', [UserController::class,'login'])->name('User.login');
//Authenticate
Route::post('/User/authenticate', [UserController::class,'authenticate'])->name('User.authenticate');

/**Forgot Password  */
//password forgot
Route::get('password-forgot', [PasswordController::class, 'password_forgot'])->name('recuperar-contrasena');
//password request
Route::post('password-request', [PasswordController::class, 'password_request'])->name('requerir-contraseña');
//password reset
Route::get('/reset-password/{token}', [PasswordController::class, 'password_reset'])->middleware('guest')->name('resetear-contraseña');
//password update
Route::post('password-upate', [PasswordController::class, 'password_update'])->middleware('guest')->name('password-update');


/*User*/
//index
Route::get('/User', [UserController::class,'index'])->name('User.index');
// Create
Route::get('/User/create', [UserController::class,'create'])->name('User.create');
//Store
Route::post('/User', [UserController::class,'store'])->name('User.store');
//Edit
Route::get('/User/{user}/edit', [UserController::class,'edit'])->name('User.edit');
//update
Route::put('/User/{user}/update', [UserController::class,'update'])->name('User.update');
//Delete
Route::delete('/User/{user}/destroy', [UserController::class,'destroy'])->name('User.destroy');

/*Modelo*/
//index
Route::get('/Modelo', [ModeloController::class,'index'])->name('Modelo.index');
// Create
Route::get('/Modelo/create', [ModeloController::class,'create'])->name('Modelo.create');
//Store
Route::post('/Modelo', [ModeloController::class,'store'])->name('Modelo.store');
//Edit
Route::get('/Modelo/{modelo}/edit', [ModeloController::class,'edit'])->name('Modelo.edit');
// Show
Route::get('/Modelo/{modelo}/show', [ModeloController::class,'show'])->name('Modelo.show');
//update
Route::put('/Modelo/{modelo}/update', [ModeloController::class,'update'])->name('Modelo.update');
//Delete
Route::delete('/Modelo/{modelo}/destroy', [ModeloController::class,'destroy'])->name('Modelo.destroy');

/**Contact */
Route::get('Contacto', [ContactoController::class, 'show'])->name('Contacto');
//Send Mail
Route::post('Mensaje', [ContactoController::class, 'envio'])->name('Mensaje');
