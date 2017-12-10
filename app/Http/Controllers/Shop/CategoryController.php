<?php

namespace App\Http\Controllers\Shop;

use App\Repository\Category\ICategory;
use App\Repository\Product\IProduct;
use App\Repository\Product\IProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    private $productRepo;
    private $productImageRepo;
    private $categoryRepo;

    public function __construct(ICategory $categoryRepo, IProduct $productRepo, IProductImage $productImage)
    {
        $this->productRepo = $productRepo;
        $this->productImageRepo = $productImage;
        $this->categoryRepo = $categoryRepo;
    }

    public function index(Request $request, $slug)
    {
        $products = $this->productRepo->getByCategory($slug);

        $dataProduct = [];
        foreach ($products as $product) {
            $image = $this->productImageRepo->getActiveProductImage($product->id);
            if (!empty($image)) {
                $dataProduct = [
                    'name' => $product->name,
                    'price' => $product->price,
                    'sale' => $product->sale,
                    'image' => $image->url
                ];
            }
        }

        return view('pages.shop.category.index', [
            'products' => $dataProduct,
            'category' => $this->categoryRepo->find($product->category_id)
        ]);
    }
}
