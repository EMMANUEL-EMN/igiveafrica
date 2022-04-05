<?php

namespace App\Http\Controllers;

use App\Models\advert;
use App\Models\content;
use Illuminate\Http\Request;

class lresources extends Controller
{
    //
    public function fundraisers()
    {
        $donor = content::where('page', 'fundraisers')
            ->where('section', 'donor')
            ->orderBy('id', 'ASC')
            ->get();
        $intro = content::where('page', 'fundraisers')
            ->where('section', 'intro')
            ->orderBy('id', 'ASC')
            ->get();
        $top = content::where('page', 'fundraisers')
            ->where('section', 'top')
            ->orderBy('id', 'ASC')
            ->get();
        $center = content::where('page', 'fundraisers')
            ->where('section', 'center')
            ->orderBy('id', 'ASC')
            ->get();
        $bottom = content::where('page', 'fundraisers')
            ->where('section', 'bottom')
            ->orderBy('id', 'ASC')
            ->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.fundraisers', compact(
            'donor',
            'advert',
            'intro',
            'bottom',
            'center',
            'top'
        ));
    }
    public function communication()
    {
        $donor = content::where('page', 'communication')
            ->where('section', 'donor')
            ->orderBy('id', 'ASC')
            ->get();
        $intro = content::where('page', 'communication')
            ->where('section', 'intro')
            ->orderBy('id', 'ASC')
            ->get();
        $top = content::where('page', 'communication')
            ->where('section', 'top')
            ->orderBy('id', 'ASC')
            ->get();
        $center = content::where('page', 'communication')
            ->where('section', 'center')
            ->orderBy('id', 'ASC')
            ->get();
        $bottom = content::where('page', 'communication')
            ->where('section', 'bottom')
            ->orderBy('id', 'ASC')
            ->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.communication', compact(
            'donor',
            'advert',
            'intro',
            'bottom',
            'center',
            'top'
        ));
    }
    public function strategies()
    {
        $donor = content::where('page', 'strategies')
            ->where('section', 'donor')
            ->orderBy('id', 'ASC')
            ->get();
        $intro = content::where('page', 'strategies')
            ->where('section', 'intro')
            ->orderBy('id', 'ASC')
            ->get();
        $top = content::where('page', 'strategies')
            ->where('section', 'top')
            ->orderBy('id', 'ASC')
            ->get();
        $center = content::where('page', 'strategies')
            ->where('section', 'center')
            ->orderBy('id', 'ASC')
            ->get();
        $bottom = content::where('page', 'strategies')
            ->where('section', 'bottom')
            ->orderBy('id', 'ASC')
            ->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.strategies', compact(
            'donor',
            'advert',
            'intro',
            'bottom',
            'center',
            'top'
        ));
    }
    public function nonprofits()
    {
        $donor = content::where('page', 'nonprofit')
            ->where('section', 'donor')
            ->orderBy('id', 'ASC')
            ->get();
        $intro = content::where('page', 'nonprofit')
            ->where('section', 'intro')
            ->orderBy('id', 'ASC')
            ->get();
        $top = content::where('page', 'nonprofit')
            ->where('section', 'top')
            ->orderBy('id', 'ASC')
            ->get();
        $center = content::where('page', 'nonprofit')
            ->where('section', 'center')
            ->orderBy('id', 'ASC')
            ->get();
        $bottom = content::where('page', 'nonprofit')
            ->where('section', 'bottom')
            ->orderBy('id', 'ASC')
            ->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.nonprofit', compact(
            'donor',
            'advert',
            'intro',
            'bottom',
            'center',
            'top'
        ));
    }
    public function donors()
    {
        $donor = content::where('page', 'donors')
            ->where('section', 'donor')
            ->orderBy('id', 'ASC')
            ->get();
        $intro = content::where('page', 'donors')
            ->where('section', 'intro')
            ->orderBy('id', 'ASC')
            ->get();
        $top = content::where('page', 'donors')
            ->where('section', 'top')
            ->orderBy('id', 'ASC')
            ->get();
        $center = content::where('page', 'donors')
            ->where('section', 'center')
            ->orderBy('id', 'ASC')
            ->get();
        $bottom = content::where('page', 'donors')
            ->where('section', 'bottom')
            ->orderBy('id', 'ASC')
            ->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.donors', compact(
            'donor',
            'advert',
            'intro',
            'bottom',
            'center',
            'top'
        ));
    }
}
