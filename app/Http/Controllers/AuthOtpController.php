<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\VerificationCode;
use Illuminate\Support\Facades\Auth;

class AuthOtpController extends Controller
{
    //return view of OTP login page

    public function login()
    {
        return view('users.otp-login');
    }

    //generate OTP
    public function generate(Request $request)
    {

        //validate data
        $request->validate([
            'phone_number' => 'required|exists:users,phone_number'
        ]);

        //Generate an OTP

        $verificationCode = $this->generateOtp($request->phone_number);

        //return with OTP
        return redirect()->route('otp.verification', ['user_id' => $verificationCode->user_id])->with('message', "Your OTP to login is - " . $verificationCode->otp);


        // $otp = mt_rand(100000, 999999); // Generate a 6-digit OTP
        // $phoneNumber = $request->input('phone_number');
    
        // // Send OTP via Twilio SMS
        // $twilio = new Client(config('app.twilio_sid'), config('app.twilio_auth_token'));
        // $twilio->messages->create(
        //     $phoneNumber,
        //     [
        //         'from' => config('app.twilio_phone_number'),
        //         'body' => "Your OTP is: $otp",
        //     ]
        // );
    
        // // Store the generated OTP and the phone number in the session or database for verification
        // // (Do not store OTPs in the database for security reasons)
        // session(['otp' => $otp, 'phone_number' => $phoneNumber]);
    
        // return redirect()->back()->with('message', 'OTP sent successfully.');
    }

    public function generateOtp($phone_number)
    {

        $user = User::where('phone_number', $phone_number)->first();

        //user does not have any existing otp
        $verificationCode = VerificationCode::where('user_id', $user->id)->latest()->first();

        $now = Carbon::now();

        if ($verificationCode && $now->isBefore($verificationCode->expire_at)) {
            return $verificationCode;
        }

        //create new otp

        return VerificationCode::create([
            'user_id' => $user->id,
            'otp' => rand(123456, 999999),
            'expire_at' => Carbon::now()->addMinutes(5)
        ]);
    }

    public function verification($user_id)
    {
        //    dd();
        return view('users.otp-verification')->with([
            'user_id' => $user_id
        ]);
    }

    public function loginWithOtp(Request $request)
    {

        # Validation
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'otp' => 'required'
        ]);

        # Validation Logic
        $verificationCode = VerificationCode::where('user_id', $request->user_id)->where('otp', $request->otp)->first();

        // dd('Successfully logged in!'); // Add this line for debugging

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
                'expire_at' => Carbon::now()
            ]);



            Auth::login($user);


            return redirect('/dashboard/home');
        }

        // dd('User not found!'); // Add this line for debugging

        return redirect()->route('otp.login')->with('message1', 'User not found');
    }
}
