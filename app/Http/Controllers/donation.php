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

        if (!empty($req->camount)) {
            $donation->amount = $req->camount;
        } else {
            $donation->amount = $req->amount;
        }
        $donation->mobile = $req->phone;
        $donation->donorWall = $req->display_name;
        $donation->fullname = $req->fname;
        $donation->email = $req->email;
        $donation->country = $req->country;
        $donation->acknoledged = "yes";
        $donation->save();
        try {
            Mail::to($req->email)->send(new thanksDonor());
        } catch (\Exception $ex) {
            return redirect('/fundraise/read/' . $req->id)
            ->with('status', 'Donation not sent successful');
        }

        return redirect('/fundraise/read/' . $req->id)->with('status', 'Donation sent successful.
                         please input your pin on the mpesa pop up');
    }
}
