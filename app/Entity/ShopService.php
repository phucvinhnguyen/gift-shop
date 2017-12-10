<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class ShopService extends Model
{
    protected $connection = 'shop_db';
    protected $table = 'shop_service';

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
}
