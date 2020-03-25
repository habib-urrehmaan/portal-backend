<?php

namespace App\Http\API\Controllers;

use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    public function create($obj)
    {
        $product=new Product;

        $product->name = $obj->name;
        $product->price = $obj->price;
        $product->created_at=$obj->created_at;
        
        $product->save();
    }

    public function getAll()
    {
        $product = Product::all();
        return $product;
    }
}
