<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function addProduct(Request $request){
        $product = new Product();
        
        $product->product = $request->product;
        $product->title = $request->title;
        $product->name = $request->name;
        $product->feature = $request->feature;
        $product->price = $request->price;
        $product->save();
    }

    public function displayProduct(){
        $all_products = Product::all();
        return view('products', ['products'=>$all_products]);
    }
}
