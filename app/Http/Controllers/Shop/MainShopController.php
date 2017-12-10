<?php

namespace App\Http\Controllers\Shop;

use App\Repository\Banner\IBanner;
use App\Repository\Product\IProduct;
use App\Repository\Product\IProductImage;
use App\Repository\Service\IShopService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainShopController extends Controller
{
    private $banner;
    private $shopService;
    private $product;
    private $productImage;

    public function __construct(IBanner $banner, IShopService $shopService, IProduct $product, IProductImage $productImage)
    {
        $this->banner = $banner;
        $this->shopService = $shopService;
        $this->product = $product;
        $this->productImage = $productImage;
    }

    public function index(Request $request)
    {
        $newProducts = $this->product->getNewProduct(10);
        $saleProducts = $this->product->getSale();

        $dataNewProduct = [];
        $dataSaleProduct = [];

        if (empty($newProducts) && empty($saleProduct)) {
            return view('pages.shop.home.index', [
                'banners' => $this->banner->loadActiveBanner(),
                'shopServices' => $this->shopService->getActiveShopService()
            ]);
        }

        foreach ($newProducts as $product) {
            $image = $this->productImage->getActiveProductImage($product->id);
            if (!empty($image)) {
                $dataNewProduct = [
                    'name' => $product->name,
                    'price' => $product->price,
                    'sale' => $product->sale,
                    'image' => $image
                ];
            }
        }

        foreach ($saleProducts as $product) {
            $image = $this->productImage->getActiveProductImage($product->id);
            if (!empty($image)) {
                $dataSaleProduct = [
                    'name' => $product->name,
                    'price' => $product->price,
                    'sale' => $product->sale,
                    'image' => $image
                ];
            }
        }

        return view('pages.shop.home.index', [
            'banners' => $this->banner->loadActiveBanner(),
            'shopServices' => $this->shopService->getActiveShopService(),
            'newProducts' => $dataNewProduct,
            'saleProducts' => $dataSaleProduct
        ]);
    }
}
