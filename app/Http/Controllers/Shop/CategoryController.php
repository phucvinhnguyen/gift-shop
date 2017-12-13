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

    public function index(Request $request, $reqCategory)
    {
        $category = $this->categoryRepo->getCategoryBySlug($reqCategory);

        if (isset($category) && !empty($category)) {
            $products = $this->productRepo->getByCategory($category->id);

            foreach ($products as $product) {
                $image = $this->productImageRepo->getActiveProductImage($product->id);
                if (!empty($image)) {
                    $product['image'] = $image->url;
                }
            }
        }

        return view('pages.shop.category.index', [
            'products' => $products,
            'category' => $category
        ]);
    }
}
