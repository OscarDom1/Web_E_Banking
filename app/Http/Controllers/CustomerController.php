<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function transactions()
    {
        $transactions = Transaction::where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('customer.transactions', ['transactions' => $transactions]);
    }


    public function transferFunds(Request $request)
    {
        // Retrieve the sender ID from the authenticated user
        $senderId = auth()->user()->id;

        // Retrieve the recipient account number, amount, and PIN from the request
        $recipientAccountNumber = $request->input('recipient_account_number');
        $amount = $request->input('amount');
        $pin = $request->input('pin');

        // Retrieve the sender and recipient customer records
        $sender = User::findOrFail($senderId);
        $recipient = User::where('account_number', $recipientAccountNumber)->first();

        // Validate the PIN
        if (!Hash::check($pin, $sender->pin)) {
            return redirect()->back()->with('message1', 'Invalid PIN. Please try again.');
        }

        // Check if the sender and recipient are the same
        if ($sender->id === $recipient->id) {
            return redirect()->back()->with('message1', 'Cannot transfer funds to your own account.');
        }

        // Check if the sender has sufficient funds
        if ($amount > $sender->account_balance) {
            return redirect()->back()->with('message1', 'Insufficient funds. Please enter a lower amount.');
        }

        // Deduct the amount from the sender's account balance
        $sender->account_balance -= $amount;

        // Add the amount to the recipient's account balance
        $recipient->account_balance += $amount;

        // Save the changes to the database
        $sender->save();
        $recipient->save();

        // Create transaction records for the sender and recipient
        $sender->transactions()->create([
            'amount' => -$amount, // Negative amount for sender's transaction
            'description' => 'Funds transferred to ' . $recipient->name,
            'type' => 'deposit',

        ]);

        $recipient->transactions()->create([
            'amount' => $amount,
            'description' => 'Funds received from ' . $sender->name,
            'type' => 'deposit',
        ]);

        

        return redirect()->back()->with('message', 'Funds transferred successfully.');
    }



    //show custome change of pin page
    public function showChangePinForm()
    {
        return view('customer.change-pin');
    }

    public function changePin(Request $request)
    {
        $validatedData = $request->validate([
            'current_pin' => 'required',
            'new_pin' => 'required|min:4|numeric',
            'confirm_pin' => 'required|same:new_pin',
        ]);

        $customer = auth()->user();

        // Verify the current PIN
        if (!password_verify($validatedData['current_pin'], $customer->pin)) {
            return redirect()->back()->with('message1', 'Invalid current PIN. Please try again.');
        }

        // Update the PIN
        $customer->pin = bcrypt($validatedData['new_pin']);
        $customer->save();

        return redirect()->back()->with('message', 'Transfer PIN changed successfully.');
    }


    //account statement
    public function accountStatement()
    {
        // Get the authenticated customer
        $customer = auth()->user();

        // Retrieve the account statement data (e.g., transaction history, balances)
        $accountStatement = Transaction::where('user_id', $customer->id)
            ->orderBy('created_at', 'desc')
            ->get();

        // Return the account statement view with the statement data
        return view('dashboard.account-statement', compact('accountStatement'));
    }

    public function showForm()
    {

        return view('dashboard.fund-transfer');
    }

    public function transferFundss(Request $request)
    {
        // Retrieve the sender ID from the authenticated user
        $senderId = auth()->user()->id;

        // Retrieve the form data
        $validatedData = $request->validate([
            'recipient_account_number' => 'required',
            'recipient_bank_name' => 'required',
            'amount' => 'required|numeric|min:0',
            'pin' => 'required',
        ]);

        // Retrieve the sender and recipient customer records
        $sender = User::findOrFail($senderId);

        // Validate the PIN
        if (!Hash::check($validatedData['pin'], $sender->pin)) {
            return redirect()->back()->with('message', 'Invalid PIN. Please try again.');
        }

        // Check if the sender has sufficient account balance
        if ($sender->account_balance < $validatedData['amount']) {
            return redirect()->back()->with('message', 'Insufficient account balance.');
        }

        // Deduct the amount from the sender's account balance
        $sender->account_balance -= $validatedData['amount'];
        $sender->save();

        // Create a transaction record for the fund transfer
        $transaction = new Transaction();
        $transaction->user_id = $senderId;
        $transaction->recipient_account_number = $validatedData['recipient_account_number'];
        $transaction->recipient_bank_name = $validatedData['recipient_bank_name'];
        $transaction->amount = $validatedData['amount'];
        $transaction->status = 'pending';
        $transaction->save();

        // Perform the actual fund transfer using the payment gateway or API

        // Update the transaction status based on the result of the fund transfer

        // Create transaction records for the sender and recipient
        $sender->transactions()->create([
            'amount' => -$validatedData['amount'], // Negative amount for sender's transaction
            'description' => 'Funds transferred to ' . $transaction->recipient_account_number,
        ]);
        

        // Return a response to the user
        return redirect()->back()->with('message', 'Fund transfer submitted successfully.');
    }
}
