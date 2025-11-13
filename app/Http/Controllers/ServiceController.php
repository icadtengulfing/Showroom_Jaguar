<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ServiceController extends Controller
{
  public function contactPage($id)
  {
    $dealer = Dealer::findOrFail($id);
    return view('users.contact', compact('dealer'));
  }
  public function contactSubmit(Request $request, $id)
  {
    $validate = $request->validate([
      'fullname' => 'required|string|max:255',
      'email' => 'required|email|max:255',
      'phone' => 'required|string|max:20',
      'country' => 'required|string|max:100',
      'model' => 'nullable|string|max:100',
      'message' => 'required|string|max:1000',
    ]);

    $dealer = Dealer::findOrFail($id);

    // Save to database
    $contact = new Contact();
    $contact->dealer_id = $id;
    $contact->fullname = $request->fullname;
    $contact->email = $request->email;
    $contact->phone = $request->phone;
    $contact->country = $request->country;
    $contact->model = $request->model ?? 'F-Pace';
    $contact->message = $request->message;
    $contact->save();

    // Prepare data for email
    $data = [
      'fullname' => $request->fullname,
      'email' => $request->email,
      'phone' => $request->phone,
      'country' => $request->country,
      'model' => $request->model,
      'message' => $request->message,
      'dealer' => $dealer,
    ];

    // Send email using SMTP
    Mail::to(env('MAIL_FROM_ADDRESS', 'admin@example.com'))->send(new ContactMail($data));

    return redirect()->back()->with('success', 'Your message has been sent successfully! Wait for our Mail!');
  }
}
