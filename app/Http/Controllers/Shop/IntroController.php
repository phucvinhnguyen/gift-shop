<?php

namespace App\Http\Controllers\Shop;

use App\Repository\Intro\IShopIntro;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IntroController extends Controller
{
    private $shopIntroRepo;

    public function __construct(IShopIntro $shopIntro)
    {
        $this->shopIntroRepo = $shopIntro;
    }

    public function index()
    {
        $content = $this->shopIntroRepo->getContent('introduction');
        return view('pages.shop.introduce.index', [
            'content' => $content
        ]);
    }

    public function faq()
    {
        $content = $this->shopIntroRepo->getContent('faq');
        return view('pages.shop.introduce.faq',[
            'content' => $content
        ]);
    }

    public function ship()
    {
        $content = $this->shopIntroRepo->getContent('delivery');
        return view('pages.shop.introduce.ship',[
            'content' => $content
        ]);
    }
}
