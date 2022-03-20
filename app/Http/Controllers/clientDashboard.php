<?php

namespace App\Http\Controllers;

use App\Models\campaign;
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
        if (session()->has('position')) {
            return view('clientDashboard.index', compact('campaigns','donors',
            'targetDonation','products','donations','targetDonors','targetProducts'));
        }
        return redirect('/login');
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
        $campaigns = campaign::where('cemail', session('position'))->get();
        //$campaign = campaign::findOrFail($campaigns['id']);
        return view('clientDashboard.campaigns',compact('campaigns'));
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

    // application
    public function capplication(Request $req)
    {
        // $validated = $req->validate([
        //     'campaignTitle' => 'required',
        //     'useremail' => 'required|email',
        //     'campaingGoal' => 'required|alpha_num',
        //     'targetDonors' => 'required|alpha_num',
        //     'objective1' => 'required|string',
        //     'objective2' => 'required|string',
        //     'objective3' => 'required|string',
        //     'campaignLogo' => 'file',
        //     'campaignImage' => 'file',
        //     'campaignVideo' => 'file',
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

        if($req->file('campaignLogo') == true)
        {
            $logo = $req->campaignLogo->getClientOriginalName();
            $uploadLogo = $req->campaignLogo->move('storage/campaign/',$logo);
        }
        if($req->file('campaignImage') == true)
        {
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
