<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomepageController extends Controller
{
    public function getAllProducts(){
        $allproducts = Product::latest()->get();
        // dd($allproducts);
        return view('allproducts', ['allproducts'=> $allproducts]);
    }
}
