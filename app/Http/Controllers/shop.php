<?php

namespace App\Http\Controllers;


use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class shop extends Controller
{
    //
    protected $table = "shops";
    public function index()
    {
        $products = products::get();
        return view('shop.index', compact('products'));
    }
    public function add_to_cart($id)
    {
        if (session()->has('cart')) {
            $items = session('cart');
            $products = session()->get('cart');
            session()->push('cart',[number_format($id)]);
            dd(session()->get('cart'));
            //return redirect()->back();
        } else {
            //session()->put('cart', [$id => 1]);
            $cart = session()->put('cart',[]);
            $sess = session()->get('cart');
            $sess[$id]=1;
            
            return redirect()->back();
        }  
        
    }
}
