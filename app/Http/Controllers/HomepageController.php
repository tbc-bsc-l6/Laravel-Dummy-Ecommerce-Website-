<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomepageController extends Controller
{
    public function getAllProducts(){
        // $allproducts = Product::latest()->paginate(18);
        // $allproducts = Product::latest();
        
        $allproducts = Product::latest()->search(request(['search']))->paginate(18);
        return view('allproducts', ['allproducts'=> $allproducts]);
    }

    // public function searchProducts(){
        
    // }
}
