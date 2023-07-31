<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{

    //show the payment form
    public function showForm()
    {
        return view('dashboard.payment-form');
    }

    public function payBill(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'biller' => 'required',
            'account_number' => 'required',
            'amount' => 'required|numeric|min:0',
        ]);

        // Retrieve the authenticated user
        $user = auth()->user();

        // Check if the account balance is sufficient for the bill payment
        if ($user->account_balance < $validatedData['amount']) {
            return redirect()->back()->with('message1', 'Insufficient account balance.');
        }

        // Deduct the bill payment amount from the account balance
        $user->account_balance -= $validatedData['amount'];
        $user->save();

        // Create a new payment record

        $payment = new Payment();
        $payment->user_id = auth()->user()->id;
        $payment->biller = $validatedData['biller'] ?? '';
        $payment->account_number = $validatedData['account_number'];
        $payment->amount = $validatedData['amount'];
        $payment->status = 'pending';
        $payment->save();


        // Create a transaction record for the bill payment
        $transaction = Transaction::create([
            'user_id' => $user->id,
            'amount' => -$payment->amount, // Negative amount for bill payment
            'description' => 'Bill payment to ' . $payment->biller . ' - ' . $payment->account_number,
            'type' => 'bills', // Set the transaction type to 'bills'
        ]);

        // Retrieve all transactions for the authenticated user, including bill payments
        $transactions = Transaction::where('user_id', auth()->user()->id)
            ->whereIn('type', ['deposit', 'transfer', 'bills'])
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        // Perform any additional payment processing here, such as integrating with payment gateways

        // Return a response to the user
        return redirect()->back()->with('message', 'Bill payment submitted successfully.');
    }
}
