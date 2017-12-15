<div class="item">
    <div class="productwrap">
        <div class="pr-img">
            {{--<div class="hot"></div>--}}
            <a href="{{ route('product.index', ['reqProduct' => $product->slug, 'id' => $product->id]) }}"><img src="{{ Storage::url($product->image) }}" alt="" class="img-responsive pr-imgproduct"/></a>
            <div class="on-sale"><div class="inner on-sale"><span class="onsale"><span class="oldprice">{{ formatCurrency($product->sale) }}đ</span><span>{{ formatCurrency($product->price) }}đ</span></span></div></div>
        </div>
        <span class="smalltitle"><a href="{{ route('product.index', ['reqProduct' => $product->slug, 'id' => $product->id]) }}">{{ $product->name }}</a></span>
    </div>
</div>