<?php

namespace App\Http\Controllers;

use App\Http\Requests\TitleRequest;
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

    public function storeCtaegory(TitleRequest $request)
    {
        try {
            $data['title'] = $request->get('title');
            if (Category::create($data)) {
                return redirect()->route('')->with("message", "success=Category added successfully");
            }
            return redirect()->back()->with('message', 'danger=Catagory not created');
        } catch (\Throwable $th) {
            return $this->ExceptionHandling($th, []);
        }
    }
}
