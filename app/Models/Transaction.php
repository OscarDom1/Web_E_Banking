<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'description',
        'user_id',
        'type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function adminHome()
    {
        $admin = Auth::user();

        // Get the total transfer amount (sum of amounts with type 'transfer')
        $totalTransfer = Transaction::where('type', 'transfer')->sum('amount');

        // Get all transactions ordered by descending created_at
        $transactions = Transaction::orderBy('created_at', 'desc')->get()
        ->paginate(10);
        
        

        return view('dashboard.admin-home', [
            'transactions' => $transactions,
            'totalTransfer' => $totalTransfer,
        ]);
    }
}
