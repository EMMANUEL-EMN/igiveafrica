<?php

namespace App\Http\Controllers;

use App\Models\campaign;
use App\Models\donation;
use App\Models\report;
use Illuminate\Http\Request;

class clientDashboard extends Controller
{
    //
    public function index()
    {
        $campaigns = campaign::where('cemail', session('position'))->get()->count();
        $donors = donation::where('cemail', session('position'))->get()->count();
        $products = 0;
        $tdonations = donation::where('cemail', session('position'))->get();
        $d = 0;
        foreach ($tdonations as $key) {
            $d += $key['amount'];
        }
        $campaignss = campaign::where('cemail', session('position'))->get();
        $targetDonation = 0;
        $targetDonors = 0;
        foreach ($campaignss as $campaign) {
            $targetDonation = $campaign['goal'];
            $targetDonors = $campaign['tdonors'];
        }
        $donations = $d;
        if (session()->has('position')) {
            return view('clientDashboard.index', compact(
                'campaigns',
                'donors',
                'targetDonation',
                'products',
                'donations',
                'targetDonors'
            ));
        }
        return redirect('/login');
    }
    public function donors()
    {
        $donors = donation::where('cemail', session('position'))->get();
        $totalDonation = 0;
        foreach ($donors as $donor) {
            $totalDonation += $donor['amount'];
        }
        $totalDonors = $donors->count();
        $campaign = campaign::where('cemail', session('position'))->get();
        $targets = '';
        foreach ($campaign as $key) {
            $targets = $key['goal'];
        }
        $target = $targets;
        return view('clientDashboard.donors', compact(
            'donors',
            'target',
            'totalDonation',
            'totalDonors'
        ));
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
        $campaigns = campaign::where('cemail', session('position'))->get();
        //$campaign = campaign::findOrFail($campaigns['id']);
        return view('clientDashboard.campaigns', compact('campaigns'));
    }
    public function fundraisers()
    {
        $donors = donation::where('cemail', session('position'))->get();
        $totalDonation = 0;
        foreach ($donors as $donor) {
            $totalDonation += $donor['amount'];
        }
        $totalDonors = $donors->count();
        $campaign = campaign::where('cemail', session('position'))->get();
        $targets = '';
        foreach ($campaign as $key) {
            $targets = $key['goal'];
        }
        $target = $targets;
        return view('clientDashboard.fundraisers', compact(
            'donors',
            'target',
            'totalDonation',
            'totalDonors'
        ));
    }
    public function reports()
    {
        $reports = report::where('cemail', session('position'))->get();
        return view('clientDashboard.reports', compact('reports'));
    }
    public function intergration()
    {
        return view('clientDashboard.intergrations');
    }
    public function communication()
    {
        return view('clientDashboard.communications');
    }

    public function settings()
    {
        return view('clientDashboard.settings');
    }
}
