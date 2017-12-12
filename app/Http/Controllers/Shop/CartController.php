<?php

namespace App\Http\Controllers\Shop;

use App\Repository\Product\IProduct;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    private $productRepo;

    public function __construct(IProduct $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function cart(Request $request)
    {
        $cart = Cart::content();
        $products = [];

        foreach ($cart as $row) {
            $product =
            $products[] = [

            ];
        }

        return view('pages.shop.checkout.cart');
    }
}
