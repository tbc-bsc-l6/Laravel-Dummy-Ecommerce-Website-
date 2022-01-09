<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomepageController extends Controller
{
    public function getAllProducts(){
        // $allproducts = Product::latest()->paginate(18);
        // $allproducts = Product::latest();
        
        $allproducts = Product::latest()->search(request(['search','category']))->paginate(12)->withQueryString();
        return view('allproducts', ['allproducts'=> $allproducts]);
    }
}
