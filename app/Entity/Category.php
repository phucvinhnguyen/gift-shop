<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $connection = 'shop_db';
    protected $table = 'category';

    public function scopeSlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }
}
