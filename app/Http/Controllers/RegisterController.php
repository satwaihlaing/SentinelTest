<?php

namespace App\Http\Controllers;

use Sentinel;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;


class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(RegisterRequest $request){
        $user = Sentinel::registerAndActivate($request->all());
        dd($user);
    }
}
