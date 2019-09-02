<?php

namespace App\Http\Controllers;

use Sentinel;
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
        dd($user);
    }
}
