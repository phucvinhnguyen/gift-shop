<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(Request $request, $reqArticle = null)
    {
        return view('pages.shop.blog.article');
    }
}
