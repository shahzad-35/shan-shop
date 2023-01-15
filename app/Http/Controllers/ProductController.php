<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Throwable;

class ProductController extends Controller
{
    public static function addProduct(Request $request)
    {
        $categories = Category::all();
        return view('addProduct')->with('categories', $categories);
    }

    /**
     * @param Request $request
     * It stores products
     * @return [type]
     */

    public function storeProduct(CreatePostRequest $request)
    {
        try {
            $request_params['name'] = $request->input('name');
            $request_params['category_id'] = $request->input('category_id');
            $image = $request->file('post_image');

            $ext = $request->file("post_image")->getClientOriginalExtension();
            $image_local_db_name = "product_" . uniqid() . "_" . time();
            $image_name = $image_local_db_name . ".$ext";

            $image->move(public_path() . '/uploads', $image_name);
            $request_params['post_image'] = URL::to("/") . '/uploads/' . $image_name;

            if (Product::create($request_params)) {
                return redirect()->route('detail-page')->with("message", "success=Product Saved successfully");
            }
            return redirect()->back()->with('message', 'danger=Product not created');
        } catch (Throwable $th) {
            return $this->ExceptionHandling($th, []);
        }
    }

    public function getDetails(Request $request)
    {
        $categories = Category::get();
        $products = Product::with('category')->get();
        return view('detail', compact('categories', 'products'));
    }

    public function deleteProduct($id)
    {
        Product::where('id', $id)->delete();
        return redirect()->back();
    }

    public function editProduct($id)
    {
        $product = Product::where('id', $id)->first();
        $categories = Category::get();
        return view('editProduct', compact('product', 'categories'));
    }

    public function updateProduct(CreatePostRequest $request)
    {
        try {
            $request_params['name'] = $request->input('name');
            $request_params['category_id'] = $request->input('category_id');
            $image = $request->file('post_image');
            $id = $request->get('id');

            $ext = $request->file("post_image")->getClientOriginalExtension();
            $image_local_db_name = "product_" . uniqid() . "_" . time();
            $image_name = $image_local_db_name . ".$ext";

            $image->move(public_path() . '/uploads', $image_name);
            $request_params['post_image'] = URL::to("/") . '/uploads/' . $image_name;

            if (Product::where('id', $id)->update($request_params)) {
                return redirect()->route('detail-page')->with("message", "success=Product updated successfully");
            }
            return redirect()->back()->with('message', 'danger=Product not updated');
        } catch (Throwable $th) {
            return $this->ExceptionHandling($th, []);
        }
    }
}
