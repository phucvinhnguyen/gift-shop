<?php
namespace App\Repository\Product;


use App\Entity\ProductImage;
use App\Repository\BaseRepository;

class ProductImageRepository extends BaseRepository implements IProductImage
{
    public function getModel()
    {
        return ProductImage::class;
    }

    public function getActiveProductImage($productId)
    {
        return $this->model->productId($productId)->active()->first();
    }
}