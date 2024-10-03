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
            'name' => $request->name,
            'address' => $request->address,
            'date' => $request->date,
            'paymentMethod' => $request->paymentMethod,
            'products' => [
                [
                    'name' => $request->productName,
                    'quantity' => $request->productQuantity,
                    'unitPrice' => $request->productPrice
                ]
            ]
        ];

        Mail::to($details['email'])->send(new SendEmail($details));
        return back()->with('success', 'Payment receipt sent successfully.');
    }
}
