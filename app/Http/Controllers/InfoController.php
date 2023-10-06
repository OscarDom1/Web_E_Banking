<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\InfoNotification;

class InfoController extends Controller
{
    public function store()
    {
        $infoNotification = User::first();
        $infoNotification->notify(new  InfoNotification(900));
        // dd($infoNotification->notifications);
    }
}
