<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use App\Cart;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('index', compact('products', $products));
    }

    public function addToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart =  new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('product.index');

    }

    public function getCart() {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart =  new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}
