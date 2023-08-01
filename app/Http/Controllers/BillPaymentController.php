<?php

// Bill Payment Controller
use App\Models\Payment;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use PaymentService; // Replace with your payment service provider library or API

class BillPaymentController extends Controller
{
    
    public function payBill(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'biller' => 'required',
            'account_number' => 'required',
            'amount' => 'required|numeric|min:0',
            'pin' => 'required',
        ]);
    
        // Retrieve the authenticated user
        $user = auth()->user();
    
        // Validate the PIN
        if (!Hash::check($validatedData['pin'], $user->pin)) {
            return redirect()->back()->with('message1', 'Invalid PIN. Please try again.');
        }
    
        // Check if the account balance is sufficient for the bill payment
        if ($user->account_balance < $validatedData['amount']) {
            return redirect()->back()->with('message1', 'Insufficient account balance.');
        }
    
        // Deduct the bill payment amount from the account balance
        $user->account_balance -= $validatedData['amount'];
        $user->save();
    
        // Create a new payment record
        $payment = Payment::create([
            'user_id' => $user->id,
            'biller' => $validatedData['biller'],
            'account_number' => $validatedData['account_number'],
            'amount' => $validatedData['amount'],
            'status' => 'pending',
        ]);
    
        // Initiate the payment request with the EEDC payment gateway
        $eedcPaymentGateway = new EEDCPaymentGateway(); // Replace with the actual EEDC payment gateway integration
        $paymentResponse = $eedcPaymentGateway->processPayment($payment); // Replace with the actual method for processing the payment
    
        // Update the payment record with the payment response
        $payment->status = $paymentResponse->status;
        $payment->transaction_id = $paymentResponse->transactionId; // Update with the response from the EEDC payment gateway
        $payment->save();
    
        // Create a transaction record for the bill payment
        $transaction = Transaction::create([
            'user_id' => $user->id,
            'amount' => -$payment->amount, // Negative amount for bill payment
            'description' => 'Bill payment to ' . $payment->biller . ' - ' . $payment->account_number,
            'type' => 'bills', // Set the transaction type to 'bills'
        ]);
    
        // Send payment confirmation notification to the customer
    
        return redirect()->back()->with('message', 'Bill payment successful.');
    }
    
    

    public function viewPaymentHistory()
    {
        $payments = Payment::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();

        return view('payment.history', ['payments' => $payments]);
    }
}
