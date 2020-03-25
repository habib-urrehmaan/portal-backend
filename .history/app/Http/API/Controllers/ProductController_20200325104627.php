<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function getActiveProducts()
    {
        const $product = Product::where('is_active',true)->count();
        return $product;
        // error_log($product);
    }
}
