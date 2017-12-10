<?php
namespace App\Repository\Product;


interface IProductImage
{
    public function getActiveProductImage($productId);
}