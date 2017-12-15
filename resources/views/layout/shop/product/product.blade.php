<div class="item">
    <div class="productwrap">
        <div class="pr-img">
            {{--<div class="hot"></div>--}}
            <a href="{{ route('product.index', ['reqProduct' => $product->slug, 'id' => $product->id]) }}"><img src="{{ Storage::url($product->image) }}" alt="" class="img-responsive pr-imgproduct"/></a>
            <div class="no-sale"><div class="inner no-sale"><span>{{ formatCurrency($product->price) }}đ</span></div></div>
        </div>
        <span class="smalltitle"><a href="{{ route('product.index', ['reqProduct' => $product->slug, 'id' => $product->id]) }}">{{ $product->name }}</a></span>
    </div>
</div>