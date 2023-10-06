<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use AmountTransferredNotification;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Notification;
use App\Notifications\AdminMessageNotification;

class AdminController extends Controller
{
    public function manageCustomers()
    {
        $customers = User::all(); // Retrieve all users from the database

        return view('admin.customers', ['customers' => $customers]);
    }

    //show funding page
    public function showFundAccountPage($customer)
{
    $customer = User::findOrFail($customer);
    return view('admin.fund-account', ['user' => $customer]);
}


    //fund customers account
    public function fundAccount(User $user, Request $request)
    {
        // Retrieve the amount to be funded from the request
        $amount = $request->input('amount');
    
        // Perform the funding operation (update the user's account balance)
        $user->account_balance += $amount;
        $user->save();
    
        // Create a transaction history after making the transfer
        Transaction::create([
            'amount' => $amount,
            'description' => 'Funds transfer from admin',
            'user_id' => $user->id, // Corrected variable name
            'type' => 'transfer',
        ]);

    
        // Redirect back or to any other appropriate page
        return redirect()->back()->with('message', 'Account funded successfully');
    }
    

public function transferAmount($userId, $amount)
{
    // Perform the transfer logic
    
    $user = User::findOrFail($userId);
    
    // Send the notification to the customer
    $user->notify(new AmountTransferredNotification($amount));

    
}

// public function sendMessageToCustomers(Request $request)
// {
//     $message = $request->input('message');

//     // Retrieve all customers
//     $customers = User::all();

//     // Send the message to all customers
//     Notification::send($customers, new AdminMessageNotification($message));

//     // Redirect or show success message
// }


public function showMessageForm()
{
    return View::make('admin.message');
}

public function sendMessageToCustomers(Request $request)
{
    $message = $request->input('message');

    // Retrieve all customers
    $customers = User::all();

    // Send the message to all customers
    Notification::send($customers, new AdminMessageNotification($message));

    // Redirect or show success message
    return redirect()->back()->with('message', 'Message sent successfully.');
}

}
