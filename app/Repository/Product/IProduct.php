<?php
namespace App\Repository\Product;


interface IProduct
{
    public function getByCategory($categoryId);

    public function getSale();

    public function getNewProduct($limit);

    public function getBySlug($slug);

    public function getRelatedProduct($excepId, $categoryId, $limit);
}