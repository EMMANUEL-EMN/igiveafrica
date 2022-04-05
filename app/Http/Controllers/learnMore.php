<?php

namespace App\Http\Controllers;

use App\Models\advert;
use App\Models\content;
use Illuminate\Http\Request;

class learnMore extends Controller
{
    //
    public function about()
    {
        $donor = content::where('page', 'about')
            ->where('section', 'intro')
            ->orderBy('id', 'ASC')
            ->get();
        $intro = content::where('page', 'about')
            ->where('section', 'intro')
            ->orderBy('id', 'ASC')
            ->get();
        $top = content::where('page', 'about')
            ->where('section', 'top')
            ->orderBy('id', 'ASC')
            ->get();
        $center = content::where('page', 'about')
            ->where('section', 'center')
            ->orderBy('id', 'ASC')
            ->get();
        $bottom = content::where('page', 'about')
            ->where('section', 'bottom')
            ->orderBy('id', 'ASC')
            ->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.about', compact(
            'donor',
            'advert',
            'intro',
            'bottom',
            'center',
            'top'
        ));
    }
    public function services()
    {
        $donor = content::where('page', 'services')
            ->where('section', 'intro')
            ->orderBy('id', 'ASC')
            ->get();
        $intro = content::where('page', 'services')
            ->where('section', 'intro')
            ->orderBy('id', 'ASC')
            ->get();
        $top = content::where('page', 'services')
            ->where('section', 'top')
            ->orderBy('id', 'ASC')
            ->get();
        $center = content::where('page', 'services')
            ->where('section', 'center')
            ->orderBy('id', 'ASC')
            ->get();
        $bottom = content::where('page', 'services')
            ->where('section', 'bottom')
            ->orderBy('id', 'ASC')
            ->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.about', compact(
            'donor',
            'advert',
            'intro',
            'bottom',
            'center',
            'top'
        ));
    }
    public function how()
    {
        $donor = content::where('page', 'how')
            ->where('section', 'donor')
            ->orderBy('id', 'ASC')
            ->get();
        $intro = content::where('page', 'how')
            ->where('section', 'intro')
            ->orderBy('id', 'ASC')
            ->get();
        $top = content::where('page', 'how')
            ->where('section', 'top')
            ->orderBy('id', 'ASC')
            ->get();
        $center = content::where('page', 'how')
            ->where('section', 'center')
            ->orderBy('id', 'ASC')
            ->get();
        $bottom = content::where('page', 'how')
            ->where('section', 'bottom')
            ->orderBy('id', 'ASC')
            ->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.howitworks', compact(
            'donor',
            'advert',
            'intro',
            'bottom',
            'center',
            'top'
        ));
    }
    public function why()
    {
        $donor = content::where('page', 'why')
            ->where('section', 'donor')
            ->orderBy('id', 'ASC')
            ->get();
        $intro = content::where('page', 'why')
            ->where('section', 'intro')
            ->orderBy('id', 'ASC')
            ->get();
        $top = content::where('page', 'why')
            ->where('section', 'top')
            ->orderBy('id', 'ASC')
            ->get();
        $center = content::where('page', 'why')
            ->where('section', 'center')
            ->orderBy('id', 'ASC')
            ->get();
        $bottom = content::where('page', 'why')
            ->where('section', 'bottom')
            ->orderBy('id', 'ASC')
            ->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.why', compact(
            'donor',
            'advert',
            'intro',
            'bottom',
            'center',
            'top'
        ));
    }
    public function pricing()
    {
        $donor = content::where('page', 'pricing')
            ->where('section', 'donor')
            ->orderBy('id', 'ASC')
            ->get();
        $intro = content::where('page', 'pricing')
            ->where('section', 'intro')
            ->orderBy('id', 'ASC')
            ->get();
        $top = content::where('page', 'pricing')
            ->where('section', 'top')
            ->orderBy('id', 'ASC')
            ->get();
        $center = content::where('page', 'pricing')
            ->where('section', 'center')
            ->orderBy('id', 'ASC')
            ->get();
        $bottom = content::where('page', 'pricing')
            ->where('section', 'bottom')
            ->orderBy('id', 'ASC')
            ->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.pricing', compact(
            'donor',
            'advert',
            'intro',
            'bottom',
            'center',
            'top'
        ));
    }
    public function caseStudies()
    {
        $donor = content::where('page', 'studies')
            ->where('section', 'donor')
            ->orderBy('id', 'ASC')
            ->get();
        $intro = content::where('page', 'studies')
            ->where('section', 'intro')
            ->orderBy('id', 'ASC')
            ->get();
        $top = content::where('page', 'studies')
            ->where('section', 'top')
            ->orderBy('id', 'ASC')
            ->get();
        $center = content::where('page', 'studies')
            ->where('section', 'center')
            ->orderBy('id', 'ASC')
            ->get();
        $bottom = content::where('page', 'studies')
            ->where('section', 'bottom')
            ->orderBy('id', 'ASC')
            ->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.casestudies', compact(
            'donor',
            'advert',
            'intro',
            'bottom',
            'center',
            'top'
        ));
    }
    public function team()
    {
        $donor = content::where('page', 'team')
            ->where('section', 'donor')
            ->orderBy('id', 'ASC')
            ->get();
        $intro = content::where('page', 'team')
            ->where('section', 'intro')
            ->orderBy('id', 'ASC')
            ->get();
        $top = content::where('page', 'team')
            ->where('section', 'top')
            ->orderBy('id', 'ASC')
            ->get();
        $center = content::where('page', 'team')
            ->where('section', 'center')
            ->orderBy('id', 'ASC')
            ->get();
        $bottom = content::where('page', 'team')
            ->where('section', 'bottom')
            ->orderBy('id', 'ASC')
            ->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.team', compact(
            'donor',
            'advert',
            'intro',
            'bottom',
            'center',
            'top'
        ));
    }
    public function partner()
    {
        $donor = content::where('page', 'partners')
            ->where('section', 'donor')
            ->orderBy('id', 'ASC')
            ->get();
        $intro = content::where('page', 'partners')
            ->where('section', 'intro')
            ->orderBy('id', 'ASC')
            ->get();
        $top = content::where('page', 'partners')
            ->where('section', 'top')
            ->orderBy('id', 'ASC')
            ->get();
        $center = content::where('page', 'partners')
            ->where('section', 'center')
            ->orderBy('id', 'ASC')
            ->get();
        $bottom = content::where('page', 'partners')
            ->where('section', 'bottom')
            ->orderBy('id', 'ASC')
            ->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.partners', compact(
            'donor',
            'advert',
            'intro',
            'bottom',
            'center',
            'top'
        ));
    }
    public function event()
    {
        $donor = content::where('page', 'events')
            ->where('section', 'donor')
            ->orderBy('id', 'ASC')
            ->get();
        $intro = content::where('page', 'events')
            ->where('section', 'intro')
            ->orderBy('id', 'ASC')
            ->get();
        $top = content::where('page', 'events')
            ->where('section', 'top')
            ->orderBy('id', 'ASC')
            ->get();
        $center = content::where('page', 'events')
            ->where('section', 'center')
            ->orderBy('id', 'ASC')
            ->get();
        $bottom = content::where('page', 'events')
            ->where('section', 'bottom')
            ->orderBy('id', 'ASC')
            ->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.events', compact(
            'donor',
            'advert',
            'intro',
            'bottom',
            'center',
            'top'
        ));
    }
}
