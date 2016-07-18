<?php

namespace App\Http\Controllers;

use Log;
use Mail;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends Controller
{
    /**
     * Shows the contact form.
     */
    public function contact() {
        return view('contact');
    }

    /**
     * Does the contacting.
     *
     * @param Request $request The HTTP Request
     */
    public function contactUs(Request $request) {
        $this->validate($request, [
          'email'   => 'bail|required|email',
          'message' => 'required'
        ], [
          'email.required'   => 'Please enter an email address.',
          'email.email'      => 'Please enter a valid email address.',
          'message.required' => 'Please enter a message.'
        ]);

        $this->sendEmail($request->email, $request->message);
        return view('contact');
    }

    /**
     * Sends an email to the admin
     * @param  string $email   The user's email
     * @param  string $message The user's message
     * @return bool
     */
    public function sendEmail($email, $message) {
      Mail::send('emails.contact', ['message' => $message],
        function($m) use ($email) {
          $m->from($email);
          $m->to(env('ADMIN_EMAIL', 'amg295@cornell.edu'))->subject('Contact Us');
      });
      session()->flash('success-message', "Contact message to the Flushr team sent successfully!");
    }
}
