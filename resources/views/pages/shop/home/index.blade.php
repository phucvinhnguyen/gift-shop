@extends('layout.shop.layout')
@section('content')
    <div class="container">
        <ul class="small-menu"><!--small-nav -->
            <li><a href="" class="myacc">Khách hàng</a></li>
            <li><a href=""  class="myshop">Giỏ hàng</a></li>
            <li><a href=""  class="mycheck">Thanh toán</a></li>
        </ul><!--small-nav -->
        <div class="clearfix"></div>
        <div class="lines"></div>
    @include('pages.shop.home.slide')
    </div>
    @include('pages.shop.home.feature-product')
    @include('pages.shop.home.about-shop')
@endsection