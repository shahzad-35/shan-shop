<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function homePage(){
        $categories = Category::with('product')->get();
        return view('home')->with('categories',$categories);
    }

    public static function adminPage(){
        return view('admin');
    }
}
