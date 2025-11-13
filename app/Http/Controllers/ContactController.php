<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEqury(Request $request)
    {
        //save in the databases
        $contact = new Contact();

        //fields
        $contact->fullname = $request->fullname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
        $contact->message = $request->message;
        $contact->model = $request->model;
        $contact->save();

        // Prepare data for email
        $data = [
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'message' => $request->message,
            'model' => $request->model,
        ];

        // Send email using SMTP
        Mail::to(env('MAIL_FROM_ADDRESS', 'admin@example.com'))->send(new ContactMail($data));

        return redirect()->back()->with('success', 'Your message has been sent successfully! Wait for our Mail!');
    }
}
