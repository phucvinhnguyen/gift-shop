@extends('layout.shop.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-title-wrap">
                <div class="page-title-inner">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="bread"><a href="{{ route('shop.index') }}">Trang chủ</a> &rsaquo; Danh mục sản phẩm</div>
                            <div class="bigtitle">{{ $category->name }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9"><!--Main content-->
            <div class="title-bg">
                <div class="title">Danh mục - {{ $category->name }}</div>
            </div>
            @if (count($products) > 0)
            <div class="row prdct"><!--Products-->
                @foreach($products as $product)
                <div class="col-md-4">
                    @if ($product->sale > 0)
                        @include('layout.shop.product.product-sale', ['product' => $product])
                    @else
                        @include('layout.shop.product.product', ['product' => $product])
                    @endif
                </div>
                @endforeach
            </div><!--Products-->
            @else
                <span>Chưa có sản phẩm.</span>
            @endif
        </div>
        <div class="col-md-3"><!--sidebar-->

            <div class="ads">

            </div>

            <div class="title-bg">
                <div class="title">Bán chạy</div>
            </div>
            <div class="best-seller">
                <ul>
                    <li class="clearfix">
                        <a href="#"><img src="{{ asset('images/demo-img.jpg') }}" alt="" class="img-responsive mini" /></a>
                        <div class="mini-meta">
                            <a href="#" class="smalltitle2">Panasonic M3</a>
                            <p class="smallprice2">Price : $122</p>
                        </div>
                    </li>
                    <li class="clearfix">
                        <a href="#"><img src="{{ asset('images/demo-img.jpg') }}" alt="" class="img-responsive mini" /></a>
                        <div class="mini-meta">
                            <a href="#" class="smalltitle2">Panasonic M3</a>
                            <p class="smallprice2">Price : $122</p>
                        </div>
                    </li>
                    <li class="clearfix">
                        <a href="#"><img src="{{ asset('images/demo-img.jpg') }}" alt="" class="img-responsive mini" /></a>
                        <div class="mini-meta">
                            <a href="#" class="smalltitle2">Panasonic M3</a>
                            <p class="smallprice2">Price : $122</p>
                        </div>
                    </li>
                </ul>
            </div>

        </div><!--sidebar-->
    </div>
    <div class="spacer"></div>
</div>

@endsection