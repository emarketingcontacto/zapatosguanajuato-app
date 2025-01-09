<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class PasswordController extends Controller
{
    //Password - forgot
    public function password_forgot(){
        return view('Password/password-forgot');
    }

    //Password - request
    public function password_request(Request $request){
        //testing
        //dd($request);

        //validation
        $validData = $request->validate(
            [
                'email'=>'email|required'
            ]);
        //Link Reset
        $status = Password::sendResetLink($request->only('email'));
        //Return Status
        return $status === Password::RESET_LINK_SENT ? back()->with(['status'=>__($status)]) : back()->withErrors(['email'=>__($status)]);
    }

    //Password - reset
    public function password_reset(string $token){
        return view('Password.passwordreset', ['token'=>$token]);
    }

    //Password - update
    public function password_update(Request $request){
        //Validation
        $request->validate(
            [
                'token'=>'required',
                'email'=>'email|required',
                'password'=> 'required|min:6|confirmed'
            ]);
        //Reset Password
        $status = Password::reset($request->only('email', 'password', 'password_confirmation', 'token'), function(User $user, string $password){
            $user->forceFill(
                [
                    'password'=>Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();
                event(new PasswordReset($user));
        });

        //Return
        return $status === Password::PASSWORD_RESET ? redirect()->route('login')->with('status', __($status)) :
        back()->withErrors(['email'=>[__($status)]]);
    }
}
