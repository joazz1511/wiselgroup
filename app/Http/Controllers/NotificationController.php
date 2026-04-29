<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::orderBy('NOTIF_DATE', 'desc')->get();

        return view('notifications.index', compact('notifications'));
    }

    public function markRead($id)
    {
        $notif = Notification::findOrFail($id);
        $notif->IS_READ = 1;
        $notif->save();

        return response()->json(['success' => true]);
    }
}