<?php

namespace App\Http\Controllers;

use App\Models\UserMessage;
use Illuminate\Http\Request; // Ensure this model is created

class ContactController extends Controller
{
    // UserMessageController.php

    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            // Save the message or perform other logic
            // ...
            UserMessage::create($validated);

            // Flash success message to the session
            return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            // Flash error message to the session
            return redirect()->route('contact')->with('error', 'There was an error sending your message. Please try again.');
        }
    }
}
