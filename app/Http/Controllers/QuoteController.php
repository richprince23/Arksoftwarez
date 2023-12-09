<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function showForm()
    {
        return view('quote');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'app_type' => 'required|string',
            'platform' => 'nullable|string',
            'business_name' => 'required|string',
            'business_details' => 'required|string',
            'app_description' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'has_domain' => 'required|in:yes,no',
            'domain_name' => 'nullable|string|required_if:has_domain,yes',
        ]);

        Quote::create($validatedData);

        // TODO: send email
        // You can add additional logic (e.g., send an email) here

        return redirect()->back()->with('success', 'Your inquiry has been submitted successfully!');
    }
}
