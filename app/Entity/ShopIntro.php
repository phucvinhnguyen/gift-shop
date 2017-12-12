<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class ShopIntro extends Model
{
    protected $connection = 'shop_db';
    protected $table = 'shop_intro';

    public function scopeKey($query, $key)
    {
        return $query->where('key', $key);
    }
}
