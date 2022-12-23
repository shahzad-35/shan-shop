<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Throwable;

class CategoryController extends Controller
{

    public function getAllCategories(Request $request)
    {
        try {
            $categories = Category::getCategories();
            return view('welcome')->with('categories', $categories);
        } catch (Throwable $th) {
            return $this->ExceptionHandling($th, []);
        }
    }
}
