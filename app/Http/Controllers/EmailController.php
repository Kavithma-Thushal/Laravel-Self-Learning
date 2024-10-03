<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EmailSample;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $details = [
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        Mail::to($details['email'])->send(new EmailSample($details));
        return back()->with('success', 'Email has been sent!');
    }
}
