<?php

namespace App\Http\Controllers;

use App\Models\products as ModelsProducts;
use Illuminate\Http\Request;

class products extends Controller
{
    public function addProduct(Request $req)
    {
        $validated = $req->validate([
            'name'=>'string|required',
            'category' => 'string|required',
            'description' => 'string|required',
            'price' => 'integer|required',
            'quantity' => 'integer',
            'dealer' => 'string|required',
            'image' => 'file|required'
        ]);
        $products = new ModelsProducts();
        $products->name = $req->name;
        $products->quantity = $req->quantity;
        $products->category = $req->category;
        $image = $req->file('image')->getClientOriginalName();
        try {
            $uploadImage = $req->file('image')->move('storage/products/',$image);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error','Reduce the image file size');
        }
        $products->image = $image;
        $products->description = $req->description;
        $products->dealer = $req->dealer;
        $products->price = $req->price;

        $products->save();

        return redirect()->back()->with('status', 'successful added');
    }
    public function editProduct($id)
    {
        $product = ModelsProducts::findOrFail($id);
        return view('',compact('product'));
    }
    public function updateProduct(Request $req)
    {
        $products = ModelsProducts::findOrFail($req->id);
        $products->name = $req->name;
        $products->quantity = $req->quantity;
        $products->category = $req->category;
        $image = $req->file('image')->getClientOriginalName();
        try {
            $uploadImage = $req->file('image')->move('storage/products/', $image);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Reduce the image file size');
        }
        $products->image = $image;
        $products->description = $req->description;
        $products->dealer = $req->dealer;
        $products->price = $req->price;

        $products->save();

        return redirect()->back()->with('status', 'successful added');
    }

    public function deleteProduct($id)
    {
        $product = ModelsProducts::findOrFail($id);
        unlink('storage/products/'.$product['image']);
        $product->delete();
        return redirect()->back()->with('status','successful deleted');
    }
}
