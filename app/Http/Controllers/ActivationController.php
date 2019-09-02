<?php

namespace App\Http\Controllers;

use Activation;
use App\User;
use Sentinel;
use Illuminate\Http\Request;

class ActivationController extends Controller
{
    public function activate($email,$activationCode){
        $user = User::WhereEmail($email)->first();
        $sentinelUser = Sentinel::findById($user->id);
        if(Activation::complete($sentinelUser,$activationCode)){

        }else{

        }
    }
}
