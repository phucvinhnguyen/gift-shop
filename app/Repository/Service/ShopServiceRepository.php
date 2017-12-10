<?php
namespace App\Repository\Service;


use App\Entity\ShopService;
use App\Repository\BaseRepository;

class ShopServiceRepository extends BaseRepository implements IShopService
{
    public function getModel()
    {
        return ShopService::class;
    }

    public function getActiveShopService()
    {
        return $this->model->active()->take(3)->get();
    }
}