<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $connection = 'shop_db';
    protected $table = 'product_image';

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function scopeProductId($query, $productId)
    {
        return $query->where('product_id', $productId);
    }

    public function scopeImageName($query, $imgName)
    {
        return $query->where('image_name', $imgName);
    }
}