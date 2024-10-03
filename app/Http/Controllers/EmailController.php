<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function showForm()
    {
        return view('emails.email_form');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        Mail::to($details['email'])->send(new SendEmail($details));
        return back();
    }
}
