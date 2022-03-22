<?php

namespace App\Http\Controllers;

use App\Models\advert;
use App\Models\campaign;
use Illuminate\Http\Request;

class fundraising extends Controller
{
    public function index()
    {   $campaigns = campaign::all();
        $advert = advert::all();
        return view('fundraising.courses',compact('campaigns', 'advert'));
    }

    public function campaignInfo($id)
    {
        $campaign = campaign::findOrFail($id);
        $advert = advert::all();
        return view('fundraising.single', compact('campaign','advert'));
    }
}
