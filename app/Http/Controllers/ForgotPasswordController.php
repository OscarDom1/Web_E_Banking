<?php

// app/Http/Controllers/ForgotPasswordController.php
namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    // Show the forgot password form
    public function showLinkRequestForm()
    {
        return view('password.forgot-password');
    }

    // Send password reset link to user's email
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? redirect()->route('password.request')->with('message', trans($status))
            : back()->withErrors(['email' => trans($status)]);
    }

    // Show the password reset form
    public function showResetForm($token)
    {
        return view('password.reset-password', ['token' => $token]);
    }

    // Reset the user's password
    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => bcrypt($password),
                    'remember_token' => Str::random(60),
                ])->save();
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect('/login')->with('message', trans($status))
            : back()->withErrors(['email' => trans($status)]);
    }
}

