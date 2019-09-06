<?php

namespace App\Http\Controllers;

use Sentinel;
use Mail;
use Activation;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;


class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(RegisterRequest $request){
        $user = Sentinel::register($request->all());
        $activation = Activation::create($user);
        $this->sendMail($user, $activation->code);
        return redirect('/');
    }

    public function sendMail($user, $code){
        Mail::send('emails.activation',[ 'user' => $user, 'code' => $code],function($message) use ($user){
            $message->to($user->email);
            $message->subject("Hello $user->first_name , activate your account.");
        });
    }
}
