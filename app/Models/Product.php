<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $primaryKey = "id";

    public $timestamps = true;
    protected $fillable = ['name', 'category_id', 'post_image','description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function getAllProducts()
    {
        return Product::with('category')->get();
    }

    public static function getProductsByCategory($id)
    {
        return Product::where('category_id', $id)->get();
    }
}
