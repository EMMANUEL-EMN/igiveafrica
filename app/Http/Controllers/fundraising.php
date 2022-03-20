<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fundraising extends Controller
{
    public function index()
    {
        return view('fundraising.courses');
    }

    public function campaignInfo($title, $email)
    {
        return view('/');
    }
}
