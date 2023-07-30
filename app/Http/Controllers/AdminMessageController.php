<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;
use App\Notifications\AdminMessageNotification;

class AdminMessageController extends Controller
{
    public function create()
    {
        return view('admin.send-message');
    }

    public function store(Request $request)
    {
        $recipientId = $request->input('recipient_id');
        $message = $request->input('message');
    
        // Validate the recipient ID
        $validator = Validator::make($request->all(), [
            'recipient_id' => 'required|exists:users,id',
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        // Send the message notification to the recipient user
        Notification::send(User::findOrFail($recipientId), new AdminMessageNotification($message));
    
        return back()->with('message', 'Message sent successfully.');
    }
    
    

//     public function showMessageForm()
// {
//     return view('admin.message-form');
// }
}
