<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('User.index', ['users'=> User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $sourceAction = $request->query('intended_action');
        $sourceProveedor = $request->query('intended_proveedor');




        if($sourceAction && $sourceProveedor){
            //Store in session
            session([
                'intended_action' => $sourceAction,
                'intended_proveedor' => $sourceProveedor,
                'registration_source' => 'fabricantes-calzado-guanajuato/' . $sourceProveedor
            ]);

        }
        return view('User.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validData = $request->validate(
            [
                'name' =>  'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6 |confirmed'
            ]);

            // $oldModelCategory = ModelCategory::where('modelcatId', $modelCategory['modelcatId'])->first();

            // Add intended action, proveedor and registration source to the valid data
            $intendedAction = $request->input('intended_action') ?? session('intended_action');
            $intendedProveedor = $request->input('intended_proveedor') ?? session('intended_proveedor');//slug
            $registrationSource = $request->input('registration_source') ?? session('registration_source');

            //Hash Password
            $validData['password'] = bcrypt($validData['password']);
            // Create user
            $user = User::create($validData);
            //Login
            auth()->login($user);

            //if stored intended action and proveedor, redirect accordingly
            if($intendedAction && $intendedProveedor && $registrationSource){
                //Store data for GA4 of new user with intent
                session([
                    'ga4_signup_slug' => $intendedProveedor,
                    'ga4_signup_action' => $intendedAction
                ]);

                // Clear sessions
                session()->forget([
                    'intended_action',
                    'intended_proveedor'
                ]);

                return redirect($registrationSource);
            }
            else{
                // return
            return redirect('/')->with('message', 'User created and logged in');
            }

    }

    /**
     * Display the specified resource.
     */
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');

    }

    public function login(Request $request){
        //Variables
        $proveedorUrl='';
        $sourceAction = $request->query('intended_action');
        $sourceProveedor = $request->query('intended_proveedor');//slug

        if($sourceProveedor){
            $bizcategory = DB::table('biz')
            ->join('bizcategories', 'biz.bizcatId', '=', 'bizcategories.bizcatId')
            ->select('bizcategories.bizcatName')
            ->where('biz.bizSlug', '=', $sourceProveedor)
            ->first();

            switch ($bizcategory->bizcatName) {
                case 'Fabricante':
                    $proveedorUrl = 'fabricantes-calzado-guanajuato/';
                    break;
                case 'Mayorista':
                    $proveedorUrl = 'mayoristas-calzado-guanajuato/';
                    break;
                case 'Minorista':
                    $proveedorUrl = 'minoristas-calzado-guanajuato/';
                    break;
                default:
                    $proveedorUrl;
                    break;
            }
        }

        if($sourceAction && $sourceProveedor){
            //Store in session
            session([
                'intended_action' => $sourceAction,
                'intended_proveedor' => $sourceProveedor,
                'registration_source' => $proveedorUrl . $sourceProveedor
            ]);
        }

        return view('User.login');
    }

    public function authenticate(Request $request){
        $validData = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:6'
            ]);

            // Clear sessions
            session()->forget([
                'intended_action',
                'intended_proveedor'
            ]);

            if(auth()->attempt($validData)){
                $request->session()->regenerate();
                if($request->input('registration_source')){
                    return redirect($request->input('registration_source'));
                }
                return view('/welcome');
            }
            return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
       // dd($user);
        return view('User.edit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validData = $request->validate(
            [
                'name' =>  'required',
                'password' => 'required|min:6 |confirmed'
            ]);
            //Hash Password
            $validData['password'] = bcrypt($validData['password']);

            $user->update($validData);

            // return
            return redirect(route('User.index'))->with('message', 'User updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('User.index'))->with('success', 'Delete Successfully');
    }
}
