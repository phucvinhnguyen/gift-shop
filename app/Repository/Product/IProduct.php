<?php
namespace App\Repository\Product;


interface IProduct
{
    public function getByCategory($categoryId);

    public function getSale();

    public function getNewProduct($limit);
}