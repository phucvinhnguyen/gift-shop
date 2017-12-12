<div class="onsale-products_wrapper">
    <div class="onsale-products_wrapper_wrap_inner">
        <h2>Đang giảm giá</h2>
        @if(isset($saleProducts) && !empty($saleProducts))
        <div class="woocommerce">
            <div class="cherry_wc_product_carousel" data-params='{"items":4, "itemsDesktop":[1199,4], "itemsDesktopSmall":[979,3], "itemsTablet":[768,2], "itemsMobile":[479,1], "navigation":true, "navigationText":["",""], "pagination":false}'>
                <ul class="products owl-carousel">
                @foreach($saleProducts as $product)
                    <li class="product type-product sale instock">
                        <a href="{{ route('product.index',['reqProduct' => $product->slug, 'id' => $product->id]) }}">
                            <div class="cherry-thumb-wrap">
                                <span class="onsale">Sale!</span>
                                <img src="{{ Storage::url($product->url) }}" class="attachment-shop_catalog" alt="{{ $product->slug }}" />
                                <span class="price">
                                    <del><span class="amount">{{ formatCurrency($product->sale) }}đ</span></del>
                                    <ins><span class="amount">{{ formatCurrency($product->price) }}đ</span></ins>
                                </span>
                                <span class="btn btn-sm cherry-quick-view">Xem nhanh</span>
                            </div>
                            <h3>{{ $product->name }}</h3>
                        </a>
                        @include('layout.shop.product.product-button', ['id' => $product->id])
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @else
            <p>Chưa có sản phẩm nào.</p>
        @endif
    </div>
</div>