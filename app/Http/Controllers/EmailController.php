<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string|min:10',
        ]);


        $apiKey = config("services.brevo.key");

        // Making the request to Brevo API
        $response = Http::withHeaders([
            "api-key" => $apiKey,
            "Content-Type" => "application/json"
        ])->post('https://api.brevo.com/v3/smtp/email', [
            "sender" => [
                "name" => $validated["name"],
                "email" => config("services.brevo.sender"),
            ],
            "to" => [
                ["email" => config("services.brevo.sender")]
            ],
            "subject" => $validated["subject"],
            "htmlContent" => view("emails.contact", [
                "name" => $validated["name"],
                "email" => $validated["email"],
                "messageContent" => $validated["message"]
            ])->render(),
        ]);


        if ($response->successful()) {
            return redirect()->back()->with('success', 'Email was sent successfully. Thank you for contacting me...');
        } else {
            return redirect()->back()->with('error', 'Failed to send email. Try again later.');
        }



    }
}
