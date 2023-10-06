<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $transactions = Transaction::where('user_id', $user->id);

        // Apply filters
        if ($request->filled('type')) {
            $transactions->where('type', $request->type);
        }

        $transactions = $transactions->paginate(10);

        return view('dashboard.home', ['transactions' => $transactions]);
    }


    //airtime purchase
    public function purchase(Request $request)
{
    // Validate the form inputs
    $validatedData = $request->validate([
        'amount' => 'required',
        'phone_number' => 'required',
        'network' => 'required',
        'pin' => 'required',
    ]);

    // Retrieve the authenticated user
    $user = auth()->user();

    // Validate the PIN
    if (!Hash::check($validatedData['pin'], $user->pin)) {
        return redirect()->back()->with('message1', 'Invalid PIN. Please try again.');
    }

    // Check if the account balance is sufficient for the airtime purchase
    if ($user->account_balance < $validatedData['amount']) {
        return redirect()->back()->with('message1', 'Insufficient account balance.');
    }

    // Deduct the airtime amount from the account balance
    $user->account_balance -= $validatedData['amount'];
    $user->save();

    // Perform the necessary logic to initiate the airtime purchase using a payment gateway or service provider
    // Here, you would integrate with the chosen payment gateway API to process the airtime purchase
    // You would need to provide the necessary credentials and make API requests to perform the purchase

    // For example, if you are using Flutterwave, you might make an API request like this
    $response = Http::post('https://api.flutterwave.com/v3/airtime/purchase', [
        'amount' => $validatedData['amount'],
        'phone_number' => $validatedData['phone_number'],
        'network' => $validatedData['network'],
        // Other required parameters
    ]);

    // Check the response from the payment gateway and handle the success or failure accordingly
    if ($response->successful()) {
        // Airtime purchase was successful
        // You can process the response or update your database with the purchase details
        
        // Create a transaction record for the airtime purchase
        $transaction = Transaction::create([
            'user_id' => $user->id,
            'amount' => -$validatedData['amount'], // Negative amount for airtime purchase
            'description' => 'Airtime purchase for ' . $validatedData['network'],
            'type' => 'bills', // Set the transaction type to 'bills'
        ]);

        return redirect()->back()->with('message', 'Airtime purchase successful.');
    } else {
        // Airtime purchase failed
        // You can handle the failure scenario, log the error, or notify the user

        // Roll back the deducted amount from the account balance
        $user->account_balance += $validatedData['amount'];
        $user->save();

        return redirect()->back()->with('message1', 'Airtime purchase failed. Please try again.');
    }
}

    

}
