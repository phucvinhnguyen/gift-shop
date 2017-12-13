<?php
namespace App\Http\ViewComposer;

use App\Repository\Category\ICategory;
use Illuminate\View\View;


class Menu
{
    protected $categories;

    public function __construct(ICategory $category)
    {
        $this->categories = $category;
    }

    public function compose(View $view)
    {
        return $view->with('categories', $this->categories->getAll());
    }
}