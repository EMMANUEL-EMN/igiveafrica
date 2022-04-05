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
        $donor = content::where('page', 'home')
            ->where('section', 'donor')
            ->orderBy('id', 'ASC')
            ->get();
        $intro = content::where('page', 'home')
            ->where('section', 'intro')
            ->orderBy('id', 'ASC')
            ->get();
        $top = content::where('page', 'home')
            ->where('section', 'top')
            ->orderBy('id', 'ASC')
            ->get();
        $center = content::where('page', 'home')
            ->where('section', 'center')
            ->orderBy('id', 'ASC')
            ->get();
        $bottom = content::where('page', 'home')
            ->where('section', 'bottom')
            ->orderBy('id', 'ASC')
            ->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('welcome', compact(
            'donor',
            'advert',
            'intro',
            'bottom',
            'center',
            'top'
        ));
    }
    public function login()
    {
        $content = content::where('page', 'login')->orderBy('id', 'ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.login', compact('content', 'advert'));
    }
    public function contact()
    {
        $content = content::where('page', 'contact')->orderBy('id', 'ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.contact', compact('content', 'advert'));
    }
}
