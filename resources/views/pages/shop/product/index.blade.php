@extends('layout.shop.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="span12">
                <section class="title-section">
                    <h3 class="title-header">{{ $product->name }}</h3>
                    <div class="clearfix"></div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="span12 right" id="content">
                <div class="product">
                    @if ($product->sale > 0)
                    <span class="onsale">Sale!</span>
                    @endif
                    <div class="images">
                        @if (!empty($productActiveImage))
                        <a href="{{ Storage::url($productActiveImage->url) }}" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto">
                            <img src="{{ Storage::url($productActiveImage->url) }}" alt="{{ $product->slug }}" title="{{ $product->slug }}">
                        </a>
                        @endif
                    </div>

                    <div class="summary entry-summary">
                        <div>
                            <p class="price">
                                @if ($product->sale > 0)
                                    <del><span class="amount">{{ formatCurrency($product->sale) }} đ</span></del>
                                @endif
                                <ins><span class="amount" style="font-size: 25px; color: #ff4646">{{ formatCurrency($product->price) }} đ</span></ins>
                            </p>
                        </div>
                        <form class="cart" method="post" enctype="multipart/form-data">
                            <div class="quantity">
                                <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
                            </div>
                            <input type="hidden" name="add-to-cart" value="">
                            <button type="submit" class="single_add_to_cart_button button alt">Mua</button>
                        </form>
                        <div class="clear"></div>
                        <div class="product_meta">
                            <span class="posted_in">Danh mục: <a href="{{ route('category.index', ['reqCategory' => $category->slug]) }}" rel="tag">{{ $category->name }}</a>.</span>
                            <span class="tagged_as">Tags: {{ $product->tags }}</span>
                        </div>

                        <!-- .share-buttons -->
                        <ul class="share-buttons unstyled clearfix">
                            <li class="twitter"></li>
                            <li class="facebook"></li>
                            <li class="google"></li>
                            <li class="pinterest"></li>
                        </ul><!-- //.share-buttons -->
                    </div><!-- .summary -->

                    <div class="woocommerce-tabs">
                        <ul class="tabs">
                            <li class="description_tab active">
                                <a href="#tab-description">Mô tả</a>
                            </li>
                            <li class="reviews_tab">
                                <a href="#tab-reviews">Đánh giá (0)</a>
                            </li>
                            <li class="cherry_wc_video_tab">
                                <a href="#tab-cherry_wc_video">Hình ảnh</a>
                            </li>
                        </ul>

                        <div class="panel entry-content" id="tab-description" style="display: block;">
                            <h3>{{ $product->name }}</h3>
                            {!! $product->describe !!}
                        </div>

                        <div class="panel entry-content" id="tab-reviews" style="display: none;">
                            <div id="reviews">
                                <div id="comments">
                                    <h3>Bình luận</h3>
                                    <p class="woocommerce-noreviews">Chưa có bình luận.</p>
                                </div>

                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="panel entry-content" id="tab-cherry_wc_video" style="display: none;"></div>
                    </div>

                    <div class="related products">
                        <h2>Sản phẩm cùng danh mục</h2>
                        <ul class="products">
                            @foreach($relatedProducts as $relatedProduct)
                            <li class="product">
                                <a href="{{ route('product.index', ['reqProduct' => $relatedProduct->slug, 'id' => $relatedProduct->id]) }}">
                                    <div class="cherry-thumb-wrap">
                                        <img width="300" height="300" src="" class="attachment-shop_catalog wp-post-image" alt="{{ $relatedProduct->slug }}">
                                        <span class="price">
                                            <span class="amount">{{ $relatedProduct->price }}</span></span>
                                        <span class="btn btn-sm cherry-quick-view">Xem nhanh</span></div>
                                    <h3>{{ $relatedProduct->name }}</h3>
                                </a>
                                @include('layout.shop.product.product-button', ['id' => $product->id])
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div><!-- #product-1919 -->
            </div>

            {{--<div class="sidebar span3" id="sidebar">
                <div id="my-recent-comments-2" class="widget">
                    <h3>Recent comments</h3>
                    <ul class="comments-custom unstyled">
                        <li class="comments-custom_li">
                            <div class="meta_format"><h4 class="comments-custom_h_author">admin</h4></div><div class="meta_format"><time datetime="2014-05-27T08:09:00">May 27, 2014 8:09 am</time></div>			<div class="clear"></div>
                            <div class="comments-custom_txt">
                                <a href="#comment" title="Go to this comment">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean...</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>--}}
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset('js/single-product.min.js') }}"></script>
@endsection