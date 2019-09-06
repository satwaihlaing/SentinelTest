<?php

namespace App\Http\Controllers;

use Sentinel;
use Illuminate\Http\Request;
use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\User;
use Reminder;
use Mail;

class ForgotPasswordController extends Controller
{
    public function index()
    {

        return view('auth.forgot-password');
    }

    public function forgotPassword(ForgotPasswordRequest $request)
    {

        $user = User::whereEmail($request->email)->first();
        if (!$user) {
            return redirect()->back()->with('message', 'Reset code was sent to your email.');
        }

        $reminder = Reminder::exists($user) ?: Reminder::create($user);
        $this->sendMail($user, $reminder->code);
        return redirect()->back()->with('message', 'Reset code was sent to your email.');
    }

    public function reset($email, $resetCode)
    {
        $user = User::byEmail($email);
        if (!$user) {
            abort(404);
        }

        if ($reminder = Reminder::exists($user)) {
            if ($resetCode == $reminder->code) {

                return view('auth.reset-password');
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }

    public function postreset(ResetPasswordRequest $request, $email, $resetCode)
    {
        $user = User::byEmail($email);
        // $sentinelUser = Sentinel::findById($user->id);
        if (!$user) {
            abort(404);
        }

        if ($reminder = Reminder::exists($user)) {
            if ($resetCode == $reminder->code) {
                Reminder::complete($user, $resetCode, $request->password);
                return redirect('login')->with('message', 'Please login with your new password!');
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }

    public function sendMail($user, $code)
    {
        Mail::send('emails.forgot-password', ['user' => $user, 'code' => $code], function ($message) use ($user) {
            $message->to($user->email);
            $message->subject("Hello $user->first_name , reset your password.");
        });
    }
}
