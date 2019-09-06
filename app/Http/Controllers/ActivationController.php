<?php

namespace App\Http\Controllers;

use Activation;
use App\User;
use Sentinel;

use Illuminate\Http\Request;

class ActivationController extends Controller
{
    public function activate($email,$activationCode){
        $user = User::whereEmail($email)->first();
        
        if(Activation::complete($user,$activationCode)){
            return redirect('/login')->with('message',"Your account is activated");
        }else{
            return redirect('/login')->with('message',"Something went wrong");
        }
    }
}
