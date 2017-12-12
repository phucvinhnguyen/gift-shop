<?php
namespace App\Repository\Intro;


use App\Entity\ShopIntro;
use App\Repository\BaseRepository;


class ShopIntroRepository extends BaseRepository implements IShopIntro
{

    public function getModel()
    {
        return ShopIntro::class;
    }

    public function getContent($key)
    {
        return $this->model->key($key)->first();
    }
}