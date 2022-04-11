<?php

namespace App\Http\Controllers;

use App\Mail\sendEmailtoUsers;
use App\Models\campaignVideos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class clientCommunication extends Controller
{
    //
    public function sendEmail(Request $req)
    {
        $details = [
            'subject' => $req->subject,
            'message' => $req->message
        ];
        try {
            Mail::to($req->email)->send(new sendEmailtoUsers($details));
        } catch (\Throwable $th) {
           return redirect()->back()->with('status','failed');
        }

        return redirect()->back()->with('status','sent successful');

    }
    public function shareVideo(Request $req)
    {
        $upload = new campaignVideos();
        $validated = $req->validate([
            'video' => 'file'
        ]);

        if ($req->file('video') == true) {
            $video = $req->file('video')->getClientOriginalName();
            $vext = $req->file('video')->getClientOriginalExtension();
            // if ($vext !== 'mp4') {
            //     return redirect()->back()->with('error','The file type is not allowed');
            // }
            $req->file('video')->move('storage/campaign/',$video);
        }
        $upload->title = $req->title;
        $upload->message = $req->message;
        $upload->video = $req->video;
        $upload->cemail = session('position');
        $upload->save();
        return redirect()->back()->with('status','successful uploaded');
    }
}
