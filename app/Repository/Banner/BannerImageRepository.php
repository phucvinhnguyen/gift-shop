<?php

namespace App\Repository\Banner;


use App\Entity\BannerImage;
use App\Repository\BaseRepository;

class BannerImageRepository extends BaseRepository implements IBanner
{
    public function getModel()
    {
        return BannerImage::class;
    }

    public function loadActiveBanner()
    {
        return $this->model->active()->get();
    }
}