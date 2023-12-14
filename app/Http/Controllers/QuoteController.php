<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function showForm()
    {
        return view('request-quote');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'app_type' => 'required|string',
            // 'platform' => 'nullable|string',
            'mobilePlatform' => 'nullable|string|required_if:app_type,mobile', // this is for the 'multiple select' field 'mobile_platform'
            'desktop.*' => 'nullable|string|required_if:app_type,desktop', // this is for the 'multiple select' field 'desktop
            'platforms.*' => 'nullable|string|required_if:app_type,multiplatform', // this is for the 'multiple select' field 'platform
            'package' => 'required|string',
            'app_name' => 'required|string',
            'business_name' => 'required|string',
            'business_details' => 'required|string',
            'app_description' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'has_domain' => 'required|in:yes,no',
            'domain_name' => 'nullable|string|required_if:has_domain,yes',
        ]);

        if ($validatedData['app_type'] === 'desktop') {
            $validatedData['platform'] = implode(', ', $validatedData['desktop']);
        } elseif ($validatedData['app_type'] === 'mobile') {
            $validatedData['platform'] = $validatedData['mobilePlatform'];
        } elseif ($validatedData['app_type'] === 'multiplatform') {
            $validatedData['platform'] = implode(', ', $validatedData['platforms']);
        }
        unset($validatedData['desktop']);
        unset($validatedData['mobilePlatform']);
        unset($validatedData['platforms']);

        Quote::create($validatedData);

        // TODO: send email
        // You can add additional logic (e.g., send an email) here

        return redirect()->back()->with('success', 'Your inquiry has been submitted successfully!');
    }

    /**
     get all inquiries and display them in the admin panel
     *
     */

     public function index()
     {
        $quotes = Quote::all();
         return view('admin.quote', compact('quotes'));
     }

     /**
      * Delete an inquiry
      *
      * @param int $id
      * @return \Illuminate\Http\RedirectResponse
      */
     public function destroy($id)
     {
         $quote = Quote::find($id);
         $quote->delete();

         return redirect()->back()->with('success', 'Quote deleted successfully!');
     }

}
