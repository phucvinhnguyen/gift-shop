<?php
namespace App\Http\ViewComposer;


use Illuminate\View\View;
use Cart;

class ShoppingCart
{
    protected $cart;

    public function __construct()
    {
        $this->cart = Cart::content();
    }

    public function compose(View $view)
    {
        return $view->with('cart', $this->cart);
    }
}