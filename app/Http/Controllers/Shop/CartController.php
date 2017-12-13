<?php

namespace App\Http\Controllers\Shop;

use App\Repository\Product\IProduct;
use App\Repository\Product\IProductImage;
use Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    private $productRepo;
    private $prodcutImageRepo;

    public function __construct(IProduct $productRepo, IProductImage $productImage)
    {
        $this->productRepo = $productRepo;
        $this->prodcutImageRepo = $productImage;
    }

    public function cart(Request $request)
    {
        $cart = Cart::content();
        return view('pages.shop.checkout.cart', ['cart' => $cart]);
    }

    public function add(Request $request)
    {
        $productId = $request->get('product_id');
        $product = $this->productRepo->find($productId);
        $image = $this->prodcutImageRepo->getActiveProductImage($product->id);

        $cartProduct = Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'options' => [
                'slug' => $product->slug,
                'image' => $image
            ]
        ]);

        return response()->json($cartProduct, 200);
    }
}
