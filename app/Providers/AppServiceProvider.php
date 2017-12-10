<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repository\Category\ICategory', 'App\Repository\Category\CategoryRepository');
        $this->app->bind('App\Repository\Product\IProduct', 'App\Repository\Product\ProductRepository');
        $this->app->bind('App\Repository\Product\IProductImage', 'App\Repository\Product\ProductImageRepository');
        $this->app->bind('App\Repository\Banner\IBanner', 'App\Repository\Banner\BannerImageRepository');
        $this->app->bind('App\Repository\Service\IShopService', 'App\Repository\Service\ShopServiceRepository');
    }
}
