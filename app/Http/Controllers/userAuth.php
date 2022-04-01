<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userAuth extends Controller
{
    //
    public function login(Request $req)
    {
        $validated = $req->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);
        $credentials = $req->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $clients = client::where('email', $req->email)->get();

            foreach ($clients as $client) {

                if ($client['org_type'] == 'contentAdmin') {

                    session()->put('position', $client['email']);
                    return redirect('/c_dashboard');
                } elseif ($client['org_type'] == 'nonprofit' || $client['org_type'] == 'individual') {
                    session()->put('position', $client['email']);
                    return redirect('/campaign/dashboard');
                }
            }
        }

        return redirect('/login/')->with('status', 'invalid login credentials');
    }

    public function joinus(Request $req)
    {
        // $validated = $req->validate([
        //     'fname' => 'required|string',
        //     'lname' => 'required|string',
        //     'email' => 'required|email',
        //     'password' => 'required|string',
        //     'country' => 'required|alpha_num',
        //     'city' => 'required|string',
        //     'org_type' => 'required|string',
        //     'location' => 'required|string',
        //     'url' => 'url',
        //     'phone' => 'required',
        //     'orgname' => 'required',
        //     'mailing_list' => 'required'
        // ]);

        $client = new client();
        $client->firstname = $req->fname;
        $client->lastname = $req->lname;
        $client->email = $req->email;
        $client->password = Hash::make($req->password);
        $client->country = $req->country;
        $client->city = $req->city;
        $client->org_type = $req->org_type;
        $client->location = $req->location;
        $client->url = $req->url;
        $client->org_email = $req->org_email;
        $client->org_tel = $req->phone;
        $client->orgname = $req->orgname;
        $client->mailinglist = $req->mailing_list;
        $client->save();

        $user = new User();
        $user->name = $req->fname . " " . $req->lname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();

        return redirect('/join')->with('sent', 'Account created successfully');
    }

    public function logoutClient()
    {
        session()->pull('position');
        Auth::logout();
        return redirect('/login');
    }
}
