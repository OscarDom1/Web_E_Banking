<?php

namespace App\Http\Controllers;

use App\Mail\OtpEmail;
use App\Models\User;
use App\Models\VerificationCode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthOtpController extends Controller
{
    // Return view of OTP login page
    public function login()
    {
        return view('users.otp-login');
    }

    // Generate and send OTP via email
    public function generateOtpAndSendEmail(Request $request)
    {
        // Validate data
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        // Generate an OTP
        $otp = $this->generateOtp();

        // Get the user by email
        $user = User::where('email', $request->email)->first();

        // Save the OTP in the verification table
        VerificationCode::create([
            'user_id' => $user->id,
            'otp' => $otp,
            'expire_at' => Carbon::now()->addMinutes(5), // Adjust the expiry time as needed
        ]);

        // Send the OTP via email
        Mail::to($user->email)->send(new OtpEmail($otp));

        return redirect()->route('otp.verification', ['user_id' => $user->id]);
    }



    // OTP Generation Logic
    private function generateOtp()
    {
        return rand(100000, 999999);
    }

    // Show OTP verification form
    public function verification($user_id)
    {
        return view('users.otp-verification')->with([
            'user_id' => $user_id,
        ]);
    }

    // Verify OTP and log in
    public function loginWithOtp(Request $request)
    {
        // Validation
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'otp' => 'required',
        ]);

        // Validation Logic
        $verificationCode = VerificationCode::where('user_id', $request->user_id)
            ->where('otp', $request->otp)
            ->first();

        $now = Carbon::now();
        if (!$verificationCode) {
            return redirect()->back()->with('message1', 'Your OTP is not correct');
        } elseif ($verificationCode && $now->isAfter($verificationCode->expire_at)) {
            return redirect()->route('otp.login')->with('message1', 'Your OTP has expired');
        }

        $user = User::whereId($request->user_id)->first();

        if ($user) {
            // Expire The OTP
            $verificationCode->update([
                'expire_at' => Carbon::now(),
            ]);

            Auth::login($user);

            return redirect('/dashboard/home');
        }

        return redirect()->route('otp.login')->with('message1', 'User not found');
    }
}
