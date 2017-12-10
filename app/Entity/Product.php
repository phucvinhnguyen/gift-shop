<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $connection = 'shop_db';
    protected $table = 'product';

    public function scopeCategory($query, $categoryId)
    {
        return $query->where('category_id', $categoryId);
    }

    public function scopeSale($query)
    {
        return $query->where('sale', '>', 0);
    }

    public function scopeSlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }
}
