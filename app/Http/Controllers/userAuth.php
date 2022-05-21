<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\advert;
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

                if ($client['org_type'] == 'nonprofit' || $client['org_type'] == 'individual') {
                    session()->put('position', $client['email']);
                    return redirect('/campaign/dashboard');
                }
                elseif ($admin = admin::where('email', $req->email)->get()) {
                    session()->put('position', $req->email);
                    return redirect('/c_web_content');
                }
                 else {
                    session()->put('position', $req->email);
                    return redirect('/c_dashboard');
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
    public function addAdmin(Request $req)
    {

        $client = new admin();
        $client->firstname = $req->fname;
        $client->lastname = $req->lname;
        $client->email = $req->email;
        $client->password = Hash::make($req->password);
        $client->country = $req->country;
        $client->city = $req->city;
        $client->account = $req->org_type;
        $client->county = $req->location;
        $client->phone = $req->phone;
        $client->idnum = $req->idnum;
        $client->save();

        $user = new User();
        $user->name = $req->fname . " " . $req->lname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();

        return redirect('/add/contentAdmins')->with('sent', 'Account created successfully');
    }
    
    public function confirm(Request $req)
    {
        $advert = advert::get();
        return view('main.password.reset',compact('advert'));
    }

    public function verify(Request $req)
    {
        $users = User::where('email',$req->email)->get();
        try {
            foreach ($users as $user) {
                if($user['email'] === $req->email){
                    $advert = advert::get();
                    $userId = $user['id'];
                    return view('main.password.new',compact('advert','userId'));
                    
                }
            }
            return redirect()->back()->with('error','The user with this email does not exist');

        } catch (\Throwable $th) {
            
            return redirect()->back()->with('error','The user with this email does not exist');
        }
    }

    public function resetP(Request $req)
    {
        $user = User::findOrFail($req->id);
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect('/login');
    }
}
