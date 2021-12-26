<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function propertyinquery(Request $request, $property_id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|max:255',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message. '\nThis message was sent from '. route('singleProperty',$property_id) . ' website.';
        $contact->save();

        

        Mail::send(new ContactMail($contact));
        return redirect()->back()->with(['message'=>'Message sent successfully']);
    }
}
