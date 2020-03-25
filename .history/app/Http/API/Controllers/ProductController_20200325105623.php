<?php

namespace App\Http\API\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function getActiveProducts()
    {
        $product = Product::where('is_active',true)->count();
        return $product;
    }
}
