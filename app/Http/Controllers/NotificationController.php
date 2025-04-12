<?php

// app/Http/Controllers/NotificationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function index()
    {
        // Get all notifications for the user
    }

    public function markAsRead($id)
    {
        // Mark a notification as read
    }
}