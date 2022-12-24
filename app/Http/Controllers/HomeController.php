<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function homePage(){
        $products = Product::all();
        return view('home')->with('products',$products);
    }
}
