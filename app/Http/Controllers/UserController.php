<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewUserRegisteredNotification;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class UserController extends Controller
{
    //show registration form
    public function register()
    {
        return view('users.register');
    }

    //store new users
    public function store(Request $request)
    {

        //validate form fields
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'address' => 'required',
            'state_of_origin' => 'required',
            'phone_number' => ['required', 'string', 'max:15'],
            // 'account_number' => 'required',
            'password' => 'required|confirmed|min:6'
        ]);

        if ($request->hasFile('profile_picture')) {
            $formFields['profile_picture'] = $request->file('profile_picture')->store('images', 'public');
        }

        //Encrypt the password
        $formFields['password'] = bcrypt($formFields['password']);

        // create account number for users 
        $formFields['account_number'] = mt_rand(10000000000, 99999999999);

        //create a user
        $user = User::create($formFields);

        //verify user email address
        event(new Registered($user));
        $user->sendEmailVerificationNotification();

        //notify admin about new registration
        $admin = User::where('is_admin', true)->first();
        Notification::send($admin, new NewUserRegisteredNotification($user));

        //log the user in
        auth()->login($user);

        //redirect user to home page
        return redirect('/login')->with('message', 'Registration Successful!, Check your mailbox and verify your email address');
    }

    //logout user, invalidate the session and regenerateToken
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }

    //show login form

    public function login()
    {
        return view('users.login');
    }

    //login user

    public function login_user(Request $request)
    {

        //validate the form fields
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            // return redirect('/home')->with('message', 'Logged in Successfully');
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('admin.home');
            } else
                return redirect()->route('otp.login');
        }
        return back()->withErrors(['email' => 'Inavlid Credentials'])->onlyInput('email');
    }

    //show dashboard
    public function indexx()
    {

        $user = Auth::user();
        $transactions = Transaction::where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('dashboard.home', ['transactions' => $transactions]);
    }

    // show admin dashboard 
    public function adminHome()
    {

        $admin = Auth::user();

        $totalCustomers = User::count();
        $totalDeposit = Transaction::where('type', 'deposit')->sum('amount');
        $totalWithdrawal = Transaction::where('type', 'withdrawal')->sum('amount');
        $totalTransfers = Transaction::where('type', 'transfer')->sum('amount');
        $transactions = Transaction::orderBy('created_at', 'desc')->get();

        $transactions = Transaction::paginate(10);

        return view('dashboard.admin-home', [
            'transactions' => $transactions,
            'totalCustomers' => $totalCustomers,
            'totalDeposit' => $totalDeposit,
            'totalWithdrawal' => $totalWithdrawal,
            'totalTransfers' => $totalTransfers,
        ]);
    }


    //display customer pin form
    public function setPinForm()
    {
        return view('customer.set-pin');
    }

    //set customer transfer pin
    public function createPin()
    {
        $user = auth()->user();

        // Check if the user already has a PIN
        if ($user->pin) {
            return redirect()->route('customer.change-pin');
        }

        return view('create-pin');
    }

    public function setPin(Request $request)
    {
        $validatedData = $request->validate([
            'pin' => 'required|min:4|numeric',
            'confirm_pin' => 'required|same:pin',
        ]);

        $user = auth()->user();

        // Check if the user already has a PIN
        if ($user->pin) {
            return redirect()->route('customer.change-pin')->with('message', 'PIN update required. Please Enter your previous pin to update.');
        }

        $user->pin = bcrypt($validatedData['pin']);
        $user->save();

        return redirect()->back()->with('message', 'Transfer PIN set successfully.');
    }

    //customers profile

    public function profile()
    {
        $user = Auth::user();
        return view('features.profile', ['user' => $user]);
    }

    //show update profile form
    public function editProfile()
    {
        $user = Auth::user();
        return view('features.edit-profile', ['user' => $user]);
    }

    //update profile
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // Validate the form fields
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'state_of_origin' => 'required|string|max:255',
        ]);

        // Update the user's profile information
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->state_of_origin = $request->state_of_origin;
        $user->save();

        return redirect()->route('features.profile')->with('message', 'Profile updated successfully');
    }

    public function show1()
    {
        return view('auth.verify');
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect('/login');
    }
}
