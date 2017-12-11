<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqsController extends Controller
{
    public function index()
    {
        return view('pages.shop.faq.index');
    }
}
