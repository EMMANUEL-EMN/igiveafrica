<?php

namespace App\Http\Controllers;

use App\Models\advert;
use App\Models\blog as ModelsBlog;
use Illuminate\Http\Request;

class blog extends Controller
{
    //
    public function index()
    {
        $blogs = ModelsBlog::all();
        $advert = advert::all();
        return view('blog.blogs',compact('blogs', 'advert'));
    }

    public function read ($id)
    {
        $blog = ModelsBlog::findOrFail($id);
        $blogs = ModelsBlog::all();
        $advert = advert::all();
        return view('blog.single', compact('blog', 'advert', 'blogs'));
    }
}
