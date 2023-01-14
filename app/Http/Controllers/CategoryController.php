<?php

namespace App\Http\Controllers;

use App\Http\Requests\TitleRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Throwable;

class CategoryController extends Controller
{

    public static function addCategoryForm()
    {
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
        try {
            if (Category::create($request->all())) {
                return redirect(url('store-category'));
            } else {
                toastr()->error('Something went wrong');
            }
        } catch (\Throwable $th) {
            return $this->ExceptionHandling($th, []);
        }
    }

    public function getProductsByCategory($id)
    {
        try {
            $products = Product::getProductsByCategory($id);
            return view('home', compact('products'));
        } catch (\Throwable $th) {
            return $this->ExceptionHandling($th, []);
        }
    }

    public function deleteCategory($id)
    {
        Product::where('category_id', $id)->delete();
        Category::where('id', $id)->delete();

        return redirect()->back();
    }

    public function editCategory($id)
    {
        $category = Category::where('id', $id)->first();
        return view('editCategory', compact('category'));
    }

    public function updateCategory(Request $request)
    {
        try {
            $request_params['title'] = $request->input('title');
            $id = $request->get('id');

            if (Category::where('id', $id)->update($request_params)) {
                return redirect()->route('all-products')->with("message", "success=Category Updated successfully");
            }
            return redirect()->back()->with('message', 'danger=Category not updated');
        } catch (Throwable $th) {
            return $this->ExceptionHandling($th, []);
        }
    }
}
