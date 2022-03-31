<?php

namespace App\Http\Controllers;

use App\Mail\thanksDonor;
use App\Models\donation as ModelsDonation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class donation extends Controller
{
    //
    public function sendMail(Request $req)
    {
        $donation = new ModelsDonation();
        $donation->cemail = $req->cemail;
        $donation->paymentOption = 'Mpesa';
        $donation->amount = 500;
        $donation->mobile = $req->phone;
        $donation->donorWall = $req->display_name;
        $donation->fullname = $req->fname;
        $donation->email = $req->email;
        $donation->country = $req->country;
        $donation->acknoledged = "no";
        $donation->save();
        try {
            Mail::to($req->email)->send(new thanksDonor());
        } catch (\Exception $ex) {
            throw new Exception('Something went wrong', 0, $ex);
        }

        return redirect('/fundraise/read/' . $req->id)->with('status', 'Donation sent successful.
                         please input your pin on the mpesa pop up');
    }
}
