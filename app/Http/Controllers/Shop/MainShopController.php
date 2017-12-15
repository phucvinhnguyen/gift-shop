<?php

namespace App\Http\Controllers\Shop;

use App\Repository\Banner\IBanner;
use App\Repository\Category\ICategory;
use App\Repository\Product\IProduct;
use App\Repository\Product\IProductImage;
use App\Repository\Service\IShopService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainShopController extends Controller
{
    private $categoryRepo;
    private $product;
    private $productImage;

    public function __construct(ICategory $category, IProduct $product, IProductImage $productImage)
    {
        $this->product = $product;
        $this->productImage = $productImage;
        $this->categoryRepo = $category;
    }

    public function index(Request $request)
    {
        $newProducts = $this->product->getNewProduct(12);
        $saleProducts = $this->product->getSale();
        $category = $this->categoryRepo->getAll();

        if (empty($newProducts) && empty($saleProduct)) {
            return view('pages.shop.home.index', ['category' => $category]);
        }

        foreach ($newProducts as $product) {
            $image = $this->productImage->getActiveProductImage($product->id);
            if (!empty($image)) {
               $product['image'] = $image->url;
            }
        }

        foreach ($saleProducts as $product) {
            $image = $this->productImage->getActiveProductImage($product->id);
            if (!empty($image)) {
                $product['image'] = $image->url;
            }
        }

        return view('pages.shop.home.index', [
            'category' => $category,
            'newProducts' => $newProducts,
            'saleProducts' => $saleProducts
        ]);
    }
}
