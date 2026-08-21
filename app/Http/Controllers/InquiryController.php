<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use Illuminate\Support\Facades\Mail; // Import Mail Facade
use App\Mail\InquiryNotification;    // Import your new Mailable

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validate the incoming data
        $request->validate([
            'type'    => 'required|in:volunteer,contact', // Ensures it is one of these two
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // 2. Save it to the single database table
        $inquiry = Inquiry::create($request->all());

        // Send the email to your info address, passing the saved $inquiry
        Mail::to('info@streamsofhopeinitiave.org')->send(new InquiryNotification($inquiry));

        // 3. Redirect back to the page they were on with a success message
        return back()->with('success', 'Thank you! Your message has been received.');
    }
}
