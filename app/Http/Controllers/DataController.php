<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class DataController extends Controller
{
    public function showPreferences(Request $request)
    {
        $language = $request->cookie('language', 'English');
        $theme = $request->cookie('theme', 'Light');

        return view('pref', compact('language', 'theme'));
    }

    public function updatePreferences(Request $request)
    {
        $request->validate([
            'language' => 'required|string|max:255',
            'theme' => 'required|string|max:255',
        ]);

        $language = $request->input('language');
        $theme = $request->input('theme');

        // Store preferences in cookies for 30 days

        return redirect()->back()
            ->withCookie(cookie('language', $language, 43200)) // 43200 minutes = 30 days
            ->withCookie(cookie('theme', $theme, 43200)) // 43200 minutes = 30 days
            ->with('status', 'Your preferences have been updated successfully!');
    }
}
