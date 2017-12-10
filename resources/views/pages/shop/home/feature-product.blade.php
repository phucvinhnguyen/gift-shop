<div class="featured-products_wrapper"><div class="featured-products_wrapper_wrap_inner">
        <h2>Sản phẩm mới</h2>
        @if (isset($newProducts) && !empty($newProducts))
        <div class="woocommerce columns-4">
            <ul class="products">
                @foreach($newProducts as $product)
                <li class="product type-product wow fadeIn animated" data-wow-duration="1s" data-wow-delay="0.15s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.15s; animation-name: fadeIn;">
                    <a href="#">
                        <div class="cherry-thumb-wrap">
                            <img width="300" height="300" src="{{ Storage::url($product['url']) }}" class="attachment-shop_catalog" alt="{{ $product['name'] }}">
                            <span class="price"><span class="amount">{{ $product['price'] }}</span> đ</span>
                            <span class="btn cherry-quick-view" data-product="1958">Xem nhanh</span>
                        </div>
                        <h3>{{ $product['name'] }}</h3>
                    </a>
                    @include('layout.shop.product.product-button');
                </li>
                @endforeach
            </ul>
        </div>
        @else
            <p>Chưa có sản phẩm nào.</p>
        @endif
    </div>
</div>