<?php

namespace App\Http\Controllers;

use App\Models\advert;
use App\Models\content;
use App\Models\contact_us;
use Illuminate\Http\Request;

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

    public function join()
    {

        $content = content::where('page', 'home')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.join', compact('content', 'advert') );
    }
}
