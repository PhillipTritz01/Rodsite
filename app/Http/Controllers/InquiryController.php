<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // TODO: Send email to services@starsetmedia.ca
        // This will be implemented in step 7

        return redirect()->back()->with('success', 'Thank you for your message! We\'ll get back to you soon.');
    }
} 