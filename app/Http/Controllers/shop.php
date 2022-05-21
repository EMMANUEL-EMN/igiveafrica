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
        try {
            $cart = session()->get('cart');
            if ($cart[$id]) {
                $cart[$id]['quantity'] += 1;
                session()->put('cart', $cart);
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            $product = products::findOrFail($id);
            $cart = session()->get('cart');

            $cart[$id] = [
                "id" => $product->id,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "photo" => $product->image
            ];

            session()->put('cart', $cart);
        }

        return redirect()->back();
    }

    public function update_cart(Request $req)
    {
        if ($req->id && $req->quantity) {
            $cart = session()->get('cart');
            $cart[$req->id]['quantity'] = $req->quantity;
            session()->put('cart', $cart);
        }
        return redirect()->back();
    }

    public function cart()
    {
        $items = session()->get('cart');
        return view('shop.cart', compact('items'));
    }

    public function remove($id)
    {
        $cart = session()->get('cart');
        // $key = $cart[$id];
        $items = session()->pull('cart',$id);
        return redirect()->back();
        // dd($cart[$id]);
    }
}
