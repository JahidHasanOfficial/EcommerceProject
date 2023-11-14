<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
     $products =Product::simplePaginate(12);

     $categories = Category::all();
     return view('home',compact('products','categories'));
    }
}
