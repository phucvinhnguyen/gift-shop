<?php
namespace App\Repository\Product;

use App\Entity\Product;
use App\Repository\BaseRepository;

class ProductRepository extends BaseRepository implements IProduct
{
    public function getModel()
    {
        return Product::class;
    }

    public function getByCategory($categoryId)
    {
        return $this->model->category($categoryId)->get();
    }

    public function getRelatedProduct($excepId, $categoryId, $limit)
    {
        return $this->model->category($categoryId)->where('id', '!=', $excepId)->take($limit)->get();
    }

    public function getSale()
    {
        return $this->model->sale()->get();
    }

    public function getNewProduct($limit)
    {
        return $this->model->orderBy('created_at', 'desc')->take($limit)->get();
    }

    public function getBySlug($slug)
    {
        return $this->model->slug($slug)->first();
    }
}