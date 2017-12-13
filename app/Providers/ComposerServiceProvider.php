<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layout.shop.partials.menu', 'App\Http\ViewComposer\Menu');
        View::composer('layout.shop.cart.cart-modal', 'App\Http\ViewComposer\ShoppingCart');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
