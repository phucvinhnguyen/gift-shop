<div class="featured-products_wrapper text-center">
    <div class="row">
        <h2>Sản phẩm mới</h2>
        @if (isset($newProducts) && !empty($newProducts))
            @foreach($newProducts as $product)
                <div class="col-lg-3 wow fadeIn animated product" data-wow-duration="1s" data-wow-delay="0.15s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.15s; animation-name: fadeIn;">
                    <a href="{{ route('product.index',['reqProduct' => $product->slug, 'id' => $product->id]) }}">
                        <div class="row">
                            <div class="col-sm-12"><img src="{{ Storage::url($product->url) }}" class="attachment-shop_catalog" alt="{{ $product->slug }}"></div>
                        </div>
                        <div class="row price">
                            <div class="col-sm-12">
                                @if ($product->sale > 0)
                                    <ins><span class="amount">{{ formatCurrency($product->price) }}đ</span></ins>
                                    <del><span class="amount">{{ formatCurrency($product->sale) }}đ</span></del>
                                @else
                                    <span class="amount">{{ formatCurrency($product->price) }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row"><div class="col-sm-12"><h3>{{ $product['name'] }}</h3></div></div>
                    </a>
                    @include('layout.shop.product.product-button', ['id' => $product->id])
                </div>
            @endforeach
        @else
            <p>Chưa có sản phẩm nào.</p>
        @endif
    </div>
</div>