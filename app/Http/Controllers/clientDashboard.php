<?php

namespace App\Http\Controllers;

use App\Models\campaign;
use App\Models\donation;
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

    // application
    public function capplication(Request $req)
    {
        // $validated = $req->validate([
        //     'campaignTitle' => 'required',
        //     'useremail' => 'required|email',
        //     'campaingGoal' => 'required',
        //     'targetDonors' => 'required',
        //     'objective1' => 'string',
        //     'objective2' => 'string',
        //     'objective3' => 'string',
        //     'campaignSummary' => 'string',
        //     'campaignChallenge' => 'string',
        //     'campaignSolution' => 'string',
        //     'campaignWord' => 'string'
        // ]);

        $campaign = new campaign();
        $campaign->cemail = $req->useremail;
        $campaign->title = $req->campaignTitle;
        $campaign->goal = $req->campaignGoal;
        $campaign->tdonors = $req->targetDonors;
        $campaign->objective1 = $req->objective1;
        $campaign->objective2 = $req->objective2;
        $campaign->objective3 = $req->objective3;

        if ($req->file('campaignLogo') == true) {
            $logo = $req->campaignLogo->getClientOriginalName();
            $uploadLogo = $req->campaignLogo->move('storage/campaign/', $logo);
        }
        if ($req->file('campaignImage') == true) {
            $image = $req->campaignImage->getClientOriginalName();
            $uploadImage = $req->campaignImage->move('storage/campaign/', $image);
        }

        if ($req->file('campaignVideo') == true) {
            $video = $req->campaignVideo->getClientOriginalName();
            $uploadVideo = $req->campaignVideo->move('storage/campaign/', $video);
        }


        $campaign->logo = $logo;
        $campaign->image = $image;
        $campaign->video = $video;
        $campaign->summary = $req->campaignSummary;
        $campaign->challenge = $req->campaignChallenge;
        $campaign->solution = $req->campaignSolution;
        $campaign->thanksNote = $req->campaignWord;

        $campaign->save();

        return redirect('/campaign/campaigns')->with('info', 'successfully created');
    }
}
