<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Enquiry;


class ContactoController extends Controller
{
    //Show Contact Form
    public function show(){
        return view('Contacto/contact-form');
    }

    public function envio(Request $request)
    {
        //dd($request);

        //validation
        $validaData = $request->validate(
            [
                'name'=>'required',
                'email'=>'email|required',
                'messageContent'=>'required|min:10'
            ]);
        //Send Mail
        Mail::to(env('MAIL_TO_ADDRESS'))->send(new Enquiry($validaData));
        //Return
        return redirect()->back()->with('Success', 'Mensaje Enviado');

    }
}
