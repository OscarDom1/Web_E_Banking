<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhoneAuthController extends Controller
{
    public function phoneAuth(){
        return view('phone-auth');
    }
}
