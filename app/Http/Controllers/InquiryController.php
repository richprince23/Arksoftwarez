<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;


class InquiryController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        Inquiry::create($validatedData);

        // TODO: send email here

        // $inquiry = new Inquiry();
        // $inquiry->first_name = $validatedData['first_name'];
        // $inquiry->last_name = $validatedData['last_name'];
        // $inquiry->email = $validatedData['email'];
        // $inquiry->subject = $validatedData['subject'];
        // $inquiry->message = $validatedData['message'];
        // $inquiry->save();

        // Mail::to($inquiry->email)->send(new InquirySubmitted($inquiry));


        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

}
