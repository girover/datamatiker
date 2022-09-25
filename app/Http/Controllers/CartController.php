<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('shopping-cart', ['cartItems'=>shopping_cart()->allItems(), 'totalPrice'=>shopping_cart()->totalPrice()]);
    }

    public function add($product_id)
    {
        $product = Product::find($product_id);

        if (!$product) {
            return abort(404);
        }

        shopping_cart()->add($product, $product->getKey());

        return back();
    }

    public function removeItem($item_id)
    {
        shopping_cart()->removeItem($item_id);

        return back();
    }
}
