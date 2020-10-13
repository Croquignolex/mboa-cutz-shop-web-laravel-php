<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\View\View;
use App\Http\Requests\ContactRequest;
use Illuminate\Contracts\View\Factory;

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

    public function sendMessage(ContactRequest $request) {
        $contact = Contact::create($request->all());

        success_toast_alert("Message envoyé avec succès");

        //Mail::to(config('company.email_1'))->send(new ContactFormMail($contact));

        return redirect(locale_route('contact.index'));
    }
}