<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact_us;

class contact extends Controller
{
    //
    public function contact(Request $req)
    {
        $contact = new contact_us();
        $validated  = $req->validate([
            'username' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contact->fullname = $req->username;
        $contact->email = $req->email;
        $contact->subject = $req->subject;
        $contact->message = $req->message;
        $contact->save();

        return redirect('/contact_us/')->with('status', 'Message sent successfully');
    }
}
