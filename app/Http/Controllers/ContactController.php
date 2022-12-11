<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function storeContact(Request $req)
    {
        $contact = new Contact();
        $contact->first_name = $req->input('firstName');
        $contact->last_name = $req->input('lastName');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
        $contact->email = $req->input('email');
        $contact->save();
        // 
        return view('layouts.pages.contact');
    }
}