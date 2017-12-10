<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class BannerImage extends Model
{
    protected $connection = 'shop_db';
    protected $table = 'banner_image';

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
}
