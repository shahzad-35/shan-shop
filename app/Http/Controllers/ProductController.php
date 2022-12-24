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
    public static function addProduct(Request $request){
        $categories = Category::all();
        return view('addProduct')->with('categories',$categories);
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
                return redirect()->route('all-products')->with("message", "success=Product added successfully");
            }
            return redirect()->back()->with('message', 'danger=Product not created');
        } catch (Throwable $th) {
            return $this->ExceptionHandling($th, []);
        }
    }
    /**
     * @param Request $request
     * This function returns all of the products
     * @return [type]
     */
    public function getProducts(Request $request)
    {
        try {
            $products = Product::getAllProducts();
            return view('home', compact('products'));
        } catch (Throwable $th) {
            return $this->ExceptionHandling($th, []);
        }
    }
}
