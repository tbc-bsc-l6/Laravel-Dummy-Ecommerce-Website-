<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomepageController extends Controller
{
    public function getAllProducts(){
        // $allproducts = Product::latest()->paginate(18);
        // $allproducts = Product::latest();
        
        $allproducts = Product::latest()->search(request(['search','category']))->paginate(12);
        return view('allproducts', ['allproducts'=> $allproducts]);
    }

    // public function categorizeProducts(){
    //     $allproducts = Product::latest()->category(request(['category']))->paginate(12);
    //     return view('allproducts', ['allproducts'=> $allproducts]);
    // }
}
