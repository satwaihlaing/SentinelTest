<?php

namespace App\Http\Controllers;

use Sentinel;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use PhpParser\Node\Stmt\Catch_;

class LoginController extends Controller
{
    public function index(){

        return view('auth.login');

    }

    public function login(LoginRequest $request){
        
        try {
            ($request->remember_me) ? $rememberMe =  true : $rememberMe = false;
            
            if(Sentinel::authenticate($request->all(),$rememberMe)){

                return Sentinel::check();

            }else{

                return redirect()->back()->with('message', 'Wrong Credentials!');

            }
        } catch (ThrottlingException $e) {

            $delay = $e->getDelay();
            return redirect()->back()->with('message', "Too many login atampt. You are banned for $delay seconds");

        }catch (NotActivatedException $e){

            return redirect()->back()->with('message', "Your account is not activated");

        }
        
        
        
    }

    public function logout(){

        Sentinel::logout();
        return redirect("/login");
        
    }
}
