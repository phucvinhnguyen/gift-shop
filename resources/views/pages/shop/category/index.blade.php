@extends('layout.shop.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
            <section class="title-section">
                <h1 class="title-header">{{ $category->name }}</h1>
                <!-- BEGIN BREADCRUMBS-->
                <ul class="breadcrumb breadcrumb__t"><a href="#">Trang chủ</a> / {{ $category->name }}</ul>
                <!-- END BREADCRUMBS -->
                <div class="clearfix"></div>
            </section><!-- .title-section -->
        </div>
    </div>
    <div class="row">

        <div class="span9 right" id="content">
            @if (isset($products) && !empty($products))
            {{--<h1 class="page-title">Home &amp; Living</h1>--}}
            <p class="woocommerce-result-count">Có tất cả {{ count($products) }} sản phẩm.</p>
            <form class="woocommerce-ordering" method="get">
                <select name="orderby" class="orderby">
                    <option value="menu_order" selected="selected">Sắp xếp</option>
                    <option value="date">Mới nhất</option>
                    <option value="price">Giá cao nhất</option>
                    <option value="price-desc">Giá thấp nhất</option>
                </select>
            </form>

            <ul class="products">
                @foreach($products as $product)
                <li class="product fadeIn animated">
                    <a href="{{ route('product.index',['reqProduct' => $product->slug, 'id' => $product->id]) }}">
                        <div class="cherry-thumb-wrap">
                            <img width="300" height="300" src="{{ Storage::url($product['image']) }}" class="attachment-shop_catalog" alt="{{ $product['name'] }}">
                            <span class="onsale">Sale!</span>
                            <span class="price"> <ins><span class="amount">{{ $product['price'] }}</span></ins><del><span class="amount">{{ $product['sale'] }}</span></del></span>
                            <span class="btn cherry-quick-view">Xem nhanh</span></div>
                        <h3>{{ $product['name'] }}</h3>
                    </a>
                    @include('layout.shop.product.product-button')
                </li>
                @endforeach
            </ul>
            @else
                <p>Chưa có sản phẩm.</p>
            @endif
        </div>

        <div class="sidebar span3" id="sidebar" data-motopress-type="static-sidebar" data-motopress-sidebar-file="sidebar.php">
            <div id="my-recent-comments-2" class="widget">
                <h4>Bình luận</h4>
                <ul class="comments-custom unstyled">
                    <li class="comments-custom_li">
                        {{--<figure class="thumbnail featured-thumbnail"><img alt="" src="./Product Categories Home &amp; Living Archive _ Gifts_files/b263802e2004e058851acabb4111135e" class="avatar avatar-64 photo" height="64" width="64"></figure>--}}
                        <div class="meta_format"><h4 class="comments-custom_h_author">admin</h4></div>
                        <div class="meta_format"><time datetime="2014-05-27T08:09:00">May 27, 2014 8:09 am</time></div>
                        <div class="clear"></div>
                        <div class="comments-custom_txt">
                            <a href="#" title="Go to this comment">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean...</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection