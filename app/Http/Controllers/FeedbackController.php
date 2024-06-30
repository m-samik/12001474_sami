<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class FeedbackController extends Controller
{
    public function showForm(Request $request)
    {
        // Retrieve the feedback message from the cookie
        $feedback = $request->cookie('feedback', null);

        // Pass the feedback message to the view
        return view('form', compact('feedback'));
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:255', // string with max characters 255
        ]);

        $feedbackMessage = $request->input('message');

        return redirect()->back()
            ->withCookie(cookie('feedback', $feedbackMessage, 43200)) // 43200 minutes = 30 days
            ->with('status', 'Feedback submitted successfully!');
    }
}
