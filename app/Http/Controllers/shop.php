<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shop extends Controller
{
    //
    protected $table = "shops";
    public function index()
    {
        return view('shop.index');
    }
}
