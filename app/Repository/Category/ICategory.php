<?php

namespace App\Repository\Category;


interface ICategory
{
    public function getCategoryBySlug($slug);
}