<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(20);
        $productsW = Product::whereNotNull('sale_off')->get();

        return view('products-all', ['products'=>$products, 'products_with_sale_off'=>$productsW]);
    }

    public function productsOfCategory($category)
    {
        $category = Category::where('name', $category)->first();
      
        $products = $category->products()->paginate(20);
        $productsW = Product::where('sale_off', '>', 0)->where('category_id', $category->id)->get();

        return view('products-by-category', ['products'=>$products, 'products_with_sale_off'=>$productsW]);
    }
}
