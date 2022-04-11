<?php

namespace App\Http\Controllers;

use App\Models\report;
use App\Models\campaign;
use Illuminate\Http\Request;

class clientBe extends Controller
{
    //
    public function addReport(Request $req)
    {
        $report = new report();

        $validated = $req->validate([
            'story' => 'string',
            'activities' => 'string',
            'image1' => 'image',
            'image2' => 'image',
            'image3' => 'image',
            'video' => 'file'
        ]);
        $report->cemail = session('position');
        $report->story = $req->story;
        $report->activities = $req->activities;

        $image1 = $req->file('image1')->getClientOriginalName();
        $image2 = $req->file('image2')->getClientOriginalName();
        $image3 = $req->file('image3')->getClientOriginalName();
        $video  = $req->file('video')->getClientOriginalName();
        $videoType = $req->file('video')->getClientOriginalExtension();
        if ($videoType != 'mp4') {
            return redirect()->back()->with('error', 'only mp4 video type allowed');
        }

        // upload images
        $req->image1->move('storage/reports', $image1);
        $req->image2->move('storage/reports', $image2);
        $req->image3->move('storage/reports', $image3);
        $req->video->move('storage/reports', $video);

        $report->image1 = $image1;
        $report->image2 = $image2;
        $report->image3 = $image3;
        $report->video = $video;
        $report->save();
        return redirect('/campaign/reports')->with('status', 'successful submited');
    }

    // application
    public function capplication(Request $req)
    {

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

    public function editR($id)
    {
        $report = report::findOrFail($id);
        return view('clientDashboard.updateReport', compact('report'));
    }

    public function updateR(Request $req, $id)
    {
        $report = report::findOrFail($id);

        $validated = $req->validate([
            'story' => 'string',
            'activities' => 'string',
            'image1' => 'image',
            'image2' => 'image',
            'image3' => 'image',
            'video' => 'file'
        ]);
        $report->cemail = session('position');
        $report->story = $req->story;
        $validated = $req->validate([
            'campaignTitle' => 'required',
            'useremail' => 'required|email',
            'campaingGoal' => 'required',
            'targetDonors' => 'required',
            'objective1' => 'string',
            'objective2' => 'string',
            'objective3' => 'string',
            'campaignSummary' => 'string',
            'campaignChallenge' => 'string',
            'campaignSolution' => 'string',
            'campaignWord' => 'string'
        ]);
        $report->activities = $req->activities;
        if ($req->file('image1') == true) {
            $filePath = "/storage/reports/" . $report['image1'];
            $image1 = $req->file('image1')->getClientOriginalName();
            unlink($filePath);
            // upload images
            $req->image1->move('storage/reports', $image1);
            $report->image1 = $image1;
        }
        if ($req->file('image1') == true) {
            $filePath2 = "/storage/reports/" . $report['image2'];
            $image2 = $req->file('image2')->getClientOriginalName();
            unlink($filePath2);
            $req->image2->move('storage/reports', $image2);
            $report->image2 = $image2;
        }
        if ($req->file('image3')) {
            $filePath3 = "/storage/reports/" . $report['image3'];
            $image3 = $req->file('image3')->getClientOriginalName();
            unlink($filePath3);
            $req->image3->move('storage/reports', $image3);
            $report->image3 = $image3;
        }
        if ($req->file('video')) {
            $filePath4 = "/storage/reports/" . $report['video'];
            $video  = $req->file('video')->getClientOriginalName();
            $videoType = $req->file('video')->getClientOriginalExtension();
            if ($videoType != 'mp4') {
                return redirect()->back()->with('error', 'only mp4 video type allowed');
            }
            unlink($filePath4);
            $req->video->move('storage/reports', $video);
            $report->video = $video;
        }

        $report->save();
        return redirect('/campaign/reports')->with('status', 'successful submited');
    }


    public function deleteR($id)
    {
        $report = report::findOrFail($id);
        $filePath = "/storage/reports/" . $report['image1'];
        $filePath2 = "/storage/reports/" . $report['image2'];
        $filePath3 = "/storage/reports/" . $report['image3'];
        $filePath4 = "/storage/reports/" . $report['video'];
        unlink($filePath);
        unlink($filePath2);
        unlink($filePath3);
        unlink($filePath4);
        $report->delete();
        return redirect('/campaign/reports')->with('status', 'successful deleted');
    }
}
