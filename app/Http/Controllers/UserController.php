<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


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
    public function create()
    {
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
            //Hash Password
            $validData['password'] = bcrypt($validData['password']);
            // Create user
            $user = User::create($validData);
            //Login
            auth()->login($user);
            // return
            return redirect('/')->with('message', 'User created and logged in');
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

    public function login(){
        return view('User.login');
    }

    public function authenticate(Request $request){
        $validData = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:6'
            ]);

            if(auth()->attempt($validData)){
                $request->session()->regenerate();
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
