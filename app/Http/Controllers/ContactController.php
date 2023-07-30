<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'user_name' => 'required',
        'user_email' => 'required|email',
        'user_phone_number' => 'required',
        'subject' => 'required',
        'message' => 'required',
        'gridCheck' => 'required',
    ]);

    // Process the form submission and perform necessary actions (e.g., sending an email, saving to the database, etc.)

    // Return a response or redirect the user
    return redirect()->back()->with('message', 'Form submitted successfully!');
}
}
