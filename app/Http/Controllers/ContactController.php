<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){

        return view('mail.contact_us');
    }

    public function contact_us_submit(Request $request){

        $name = $request->name;
        $email = $request->email;
        $messaggio = $request->messaggio;

        try{

            Mail::to($email)->send(new ContactMail(Auth::user(), $name, $email, $messaggio));

        } catch(Exception $error){

            return redirect()->back()->with('emailError', 'Si è verificato un problema con i nostri server, riprova tra qualche minuto');
        
        }

         return redirect('/')->with('emailSent', 'Abbiamo ricevuto la tua candidatura, ti risponderemo il prima possibile');

    }
}
