<div class="featured-products_wrapper">
    <div class="row">
        <h2>Sản phẩm mới</h2>
        @if (isset($newProducts) && !empty($newProducts))
            @foreach($newProducts as $product)
                <div class="col-lg-3 wow fadeIn animated" data-wow-duration="1s" data-wow-delay="0.15s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.15s; animation-name: fadeIn;>
                        <a href="{{ route('product.index',['reqProduct' => $product->slug, 'id' => $product->id]) }}">
                            <div class="cherry-thumb-wrap">
                                <img src="{{ Storage::url($product->url) }}" class="attachment-shop_catalog" alt="{{ $product->slug }}">
                                <span class="price">
                                    @if ($product->sale > 0)
                                        <ins><span class="amount">{{ formatCurrency($product->price) }}đ</span></ins>
                                        <del><span class="amount">{{ formatCurrency($product->sale) }}đ</span></del>
                                    @else
                                        <span class="amount">{{ formatCurrency($product->price) }}</span>
                                    @endif
                                </span>
                                <span class="btn cherry-quick-view">Xem nhanh</span>
                            </div>
                            <h3>{{ $product['name'] }}</h3>
                        </a>
                        @include('layout.shop.product.product-button', ['id' => $product->id])
                </div>
            @endforeach
        @else
            <p>Chưa có sản phẩm nào.</p>
        @endif
    </div>
</div>