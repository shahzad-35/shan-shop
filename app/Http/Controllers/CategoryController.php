<?php

namespace App\Http\Controllers;

use App\Http\Requests\TitleRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Throwable;

class CategoryController extends Controller
{

    public static function addCategoryForm(){
        return view('addCategory');
    }

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
        try{
            if(Category::create($request->all())){
                toastr()->success('New Category has been added');
                return redirect(url('add-category'));
            }
            else{
                toastr()->error('Something went wrong');
            }


        } catch (\Throwable $th) {
            return $this->ExceptionHandling($th, []);
        }
        
    }
}
