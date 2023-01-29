<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $primaryKey = "id";

    public $timestamps = true;
    protected $fillable = ['title'];

    public static function getCategories()
    {
        return Category::all();
    }

     public function product()
    {
        return $this->hasMany(Product::class);
    }
}
