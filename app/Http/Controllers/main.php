<?php

namespace App\Http\Controllers;

use App\Models\advert;
use App\Models\content;
use Illuminate\Http\Request;

class main extends Controller
{
    //
    public function index()
    {
        $content = content::where('page', 'home')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('welcome', compact('content', 'advert') );
    }
    public function about()
    {
        $content = content::where('page', 'about')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.about', compact('content', 'advert') );
    }
    public function services()
    {
        $content = content::where('page', 'services')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.services', compact('content', 'advert') );
    }
    public function how()
    {
        $content = content::where('page', 'how')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.howitworks', compact('content', 'advert') );
    }
    public function why()
    {
        $content = content::where('page', 'why')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.why', compact('content', 'advert') );
    }
    public function pricing()
    {
        $content = content::where('page', 'pricing')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.pricing', compact('content', 'advert') );
    }
    public function caseStudies()
    {
        $content = content::where('page', 'casestudies')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.casestudies', compact('content', 'advert') );
    }
    public function team()
    {
        $content = content::where('page', 'team')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.team', compact('content', 'advert') );
    }
    public function partner()
    {
        $content = content::where('page', 'partner')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.partners', compact('content', 'advert') );
    }
    public function event()
    {
        $content = content::where('page', 'events')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.events', compact('content', 'advert') );
    }
    public function fundraisers()
    {
        $content = content::where('page', 'fundraisers')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.fundraisers', compact('content', 'advert') );
    }
    public function communication()
    {
        $content = content::where('page', 'communication')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.communication', compact('content', 'advert') );
    }
    public function strategies()
    {
        $content = content::where('page', 'strategies')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.strategies', compact('content', 'advert') );
    }
    public function nonprofits()
    {
        $content = content::where('page', 'nonprofit')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.nonprofit', compact('content', 'advert') );
    }
    public function donors()
    {
        $content = content::where('page', 'donors')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.donors', compact('content', 'advert') );
    }
    public function login()
    {
        $content = content::where('page', 'login')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.login', compact('content', 'advert') );
    }
    public function contact()
    {
        $content = content::where('page', 'contact')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.contact', compact('content', 'advert') );
    }
}
