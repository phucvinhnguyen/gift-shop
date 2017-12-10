<?php
namespace App\Repository\Category;

use App\Entity\Category;
use App\Repository\BaseRepository;

class CategoryRepository extends BaseRepository implements ICategory
{
    public function getModel()
    {
        return Category::class;
    }

    public function getCategoryBySlug($slug)
    {
        return $this->model->slug($slug)->first();
    }
}