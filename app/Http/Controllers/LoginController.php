<?php

namespace App\Http\Controllers;

use Sentinel;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(LoginRequest $request){
        Sentinel::authenticate($request->all());
        return Sentinel::check();
    }

    public function logout(){
        Sentinel::logout();
        return redirect("/login");
    }
}
