<div class="f-widget featpro">
    <div class="container">
        <div class="title-widget-bg">
            <div class="title-widget">Đang giảm giá</div>
            <div class="carousel-nav">
                <a class="prev"></a>
                <a class="next"></a>
            </div>
        </div>
        <div id="product-carousel" class="owl-carousel owl-theme">
            @foreach($saleProducts as $product)
                @include('layout.shop.product.product-sale', ['product' => $product])
            @endforeach
        </div>
    </div>
</div>