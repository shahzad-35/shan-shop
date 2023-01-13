<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Throwable;

class UserController extends Controller
{

    public function login(LoginRequest $request)
    {
        try {
            $inputs = $request->all();
            $auth = User::validateUser($inputs);
            if ($auth) {
                session()->put('logged_in',true);
                return view('detail');
                return redirect()->route('add-product-form')->with("message", "success=Login successfully");
            }
            return redirect()->back()->with('message', 'danger=Invalid credentials');
        } catch (\Throwable $th) {
            return $this->ExceptionHandling($th, []);
        }
    }

    public function loginForm()
    {
        return view('adminLogin');
    }
}
