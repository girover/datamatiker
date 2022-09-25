<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $categories_with_products = Category::with('products')->get();
        $slider_items = Product::inRandomOrder()->take(6)->get();
        
        return view('home')->with(['categories_with_products'=>$categories_with_products, 'slider_items'=>$slider_items]);
    }
}
