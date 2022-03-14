<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientDashboard extends Controller
{
    //
    public function index()
    {
        $campaigns = 0;
        $donors = 0;
        $products = 0;
        $targetDonation = 0;
        $targetDonors = 0;
        $donations = 0;
        $targetProducts = 0;
        return view('clientDashboard.index', compact('campaigns','donors',
        'targetDonation','products','donations','targetDonors','targetProducts'));
    }
    public function donors()
    {
        return view('clientDashboard.donors');
    }

    public function upgrades()
    {
        return view('clientDashboard.upgrade');
    }
    public function recuring()
    {
        return view('clientDashboard.recuring');
    }
    public function campaigns()
    {
        return view('clientDashboard.campaigns');
    }
    public function fundraisers()
    {
        return view('clientDashboard.fundraisers');
    }
    public function reports()
    {
        return view('clientDashboard.reports');
    }
    public function intergration()
    {
        return view('clientDashboard.intergrations');
    }
    public function communication()
    {
        return view('clientDashboard.communications');
    }
    public function partners()
    {
        return view('clientDashboard.partners');
    }
    public function settings()
    {
        return view('clientDashboard.settings');
    }
}
