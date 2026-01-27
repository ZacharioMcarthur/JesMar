<?php

namespace App\Http\Controllers;

use App\Notifications\GenericNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class NotificationController extends Controller
{
    public function sendNotification(Request $request)
    {
        $user = $request->user();
        $message = 'You have a new notification!';
        $user->notify(new GenericNotification($message));
        return response()->json(['message' => 'Notification sent successfully!']);
    }
}