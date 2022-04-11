<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    //
    public function index(Request $req)
    {
        try {
            Nexmo::message()->send([
                'to' => $req->phone,
                'from' => '0758501290',
                'text' => $req->message
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Not sent successful');
        }
        return redirect()->back()->with('status', 'sent successful');
    }
}
