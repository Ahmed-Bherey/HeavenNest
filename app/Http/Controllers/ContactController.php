<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email|max:255',
        //     'phone' => 'required|string|max:20',
        //     'message' => 'required|string',
        // ]);

        $contactData = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        // حفظ الرسالة في قاعدة البيانات
        Contact::create($contactData);

        // إرسال البريد الإلكتروني
        Mail::to('ahmed.bhery@ecmpp.com')->send(new ContactMail($contactData));

        return redirect()->back()->with('success', 'تم إرسال رسالتك بنجاح!');
    }
}

