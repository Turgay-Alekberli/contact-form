<?php

namespace App\Http\Controllers\Site\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMessage;

class ContactHandleController extends Controller
{
    public function handle(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'description' => 'required',
        ]);

        Mail::to(env('MAIL_NO_REPLY_ADDRESS'))->send(new ContactFormMessage());

        return view('site.pages.contacts-success');
    }
}
