<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientDashboard extends Controller
{
    //
    public function index()
    {
        return view('clientDashboard.index');
    }
}
