<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Category $category)
    {
        $products = $category->products;
        return view('products', compact('products'));
    }

    public function show(Product $product) {
        return view('product-details', compact('product'));
    }
}
