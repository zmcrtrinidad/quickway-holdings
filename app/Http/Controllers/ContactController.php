<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    //

    public function index()
    {
        return view('pages.contact');
    }

    public function send(Request $request)
    {
        // validate the form data
        $validatedData = $request->validate([

            'name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        // dd($validatedData);
        // send the email
        Mail::to('info@quickwayholdings.com')->send(new ContactFormMail($validatedData));

        // redirect back to the contact page with a success message
        return redirect()->back()->with('success', 'Your message has been sent.');
    }
}
