<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        // Validate the email address
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        // Store the subscriber
        Subscriber::create([
            'email' => $request->input('email'),
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }
}

