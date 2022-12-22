<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Throwable;

class ProductController extends Controller
{

    /**
     * @param Request $request
     * It stores products
     * @return [type]
     */
    public function storeProduct(CreatePostRequest $request)
    {
        try {
            $request_params['name'] = $request->input('title');
            $request_params['category_id'] = $request->input('category_id');
            $image = $request->file('post_image');

            $ext = $request->file("post_image")->getClientOriginalExtension();
            //it gives unique name to image after concatentaion with id and time
            $image_local_db_name = "product_" . uniqid() . "_" . time();
            //it gives final name of image
            $image_name = $image_local_db_name . ".$ext";

            $image->move(public_path() . '/uploads', $image_name);
            $request_params['post_image'] = URL::to("/") . '/uploads/' . $image_name;

            if (Product::create($request_params)) {
                //Please add route name here where you want to redirect it
                return redirect()->route()->with("message", "success=Product added successfully");
            }
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
            return view('welcome')->with('product', $products);
        } catch (Throwable $th) {
            return $this->ExceptionHandling($th, []);
        }
    }
}
