<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:11|numeric',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = Contact::create($request->all());

        // Send email
        // Mail::to('hasan.aak1998@gmail.com')->send(new ContactMail($contact));

        return redirect()->back()
            ->with('success', 'Thank you for contacting us. We will get back to you shortly.');
    }
}
