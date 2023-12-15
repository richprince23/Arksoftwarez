<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\Traits\SmsTrait;

class InquiryController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'email' => 'required|email',
                'subject' => 'required|string',
                'message' => 'required|string',
            ]);

            // Inquiry::create($validatedData);

            // TODO: send email here

            $inquiry = new Inquiry();
            $inquiry->first_name = $validatedData['first_name'];
            $inquiry->last_name = $validatedData['last_name'];
            $inquiry->email = $validatedData['email'];
            $inquiry->subject = $validatedData['subject'];
            $inquiry->message = $validatedData['message'];
            $inquiry->save();

            // Send SMS
            $sms = new SmsTrait();
            $sms->sendSms("024728115", "Hello ARK, you have a new inquiry from " . $inquiry->first_name . " " . $inquiry->last_name . ". Kindly check your dashboard for details.");

            // Mail::to($inquiry->email)->send(new InquirySubmitted($inquiry));


            return redirect()->back()->with('success', 'Your message has been sent successfully!');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'There was a problem with your request. Please check the details and try again');
        }
    }

    /**
     get all inquiries and display them in the admin panel
     *
     */

    public function index()
    {
        $inquiries = Inquiry::all();
        return view('admin.inquiry', compact('inquiries'));
    }

    /**
     * Delete an inquiry
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $inquiry = Inquiry::find($id);
        $inquiry->delete();

        return redirect()->back()->with('success', 'Inquiry deleted successfully!');
    }

    /**
     * Reply to an inquiry
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function reply(Request $request, $id)
    {
        $inquiry = Inquiry::find($id);
        $inquiry->reply = $request->reply;
        $inquiry->save();
        // Send reply email
        // Mail::to($inquiry->email)->send(new InquiryReplied($inquiry));

        return redirect()->back()->with('success', 'Inquiry replied successfully!');
    }
}
