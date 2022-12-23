<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function homePage(){
        return view('home');
    }

    public static function addCategoryForm(){
        return view('addCategory');
    }

    public static function storeCategory(Request $request){
        Category::create($request->all());
        toastr()->success('New Category has been added');
        return redirect(url('/add-category'));
    }

    public static function addProduct(){
        
        return view('addProduct');
    }
}
