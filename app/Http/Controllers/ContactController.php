<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\View\View;
use App\Mail\ContactFormMail;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ContactRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class ContactController extends Controller
{
    /**
     * Show user contact page
     *
     * @return Factory|View
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Save user contact message & send mail
     *
     * @param ContactRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function sendMessage(ContactRequest $request) {
        $contact = Contact::create($request->all());

        success_toast_alert(__('toast.contact_message_sent'));

        $sender = config('company.email');
        Mail::to($sender)->send(new ContactFormMail($contact));

        return redirect(locale_route('contact.index'));
    }
}