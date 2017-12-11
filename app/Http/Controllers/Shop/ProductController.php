<?php

namespace App\Http\Controllers\Shop;

use App\Repository\Category\ICategory;
use App\Repository\Product\IProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    private $productRepo;
    private $categoryRepo;

    public function __construct(IProduct $productRepo, ICategory $categoryRepo)
    {
        $this->productRepo = $productRepo;
        $this->categoryRepo = $categoryRepo;
    }

    public function index(Request $request, $reqProduct, $id)
    {
        $product = $this->productRepo->find($id);
        if (empty($product)) {
            return redirect()->route('shop.index');
        }

        $category = $this->categoryRepo->find($product->category_id);
        $relatedProducts = $this->productRepo->getRelatedProduct($id, $product->category_id, 5);

        return view('pages.shop.product.index', [
            'product' => $product,
            'category' => $category,
            'relatedProducts' => $relatedProducts
        ]);
    }
}
