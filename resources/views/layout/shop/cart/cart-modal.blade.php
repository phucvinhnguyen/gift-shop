<div class="cd-cart-container">
    <a href="#0" class="cd-cart-trigger">
        Cart
        <ul class="count"> <!-- cart items count -->
            <li>{{ count($cart) }}</li>
            <li>{{ count($cart) + 1 }}</li>
        </ul> <!-- .count -->
    </a>

    <div class="cd-cart">
        <div class="wrapper">
            <header>
                <h3 class="cd-total-cart">Tổng cộng: <span>{{ Cart::total(0, '.', ',') }}</span></h3>
                <span class="undo">Đã xóa khỏi giỏ hàng. <a href="#0">Hoàn tác</a></span>
            </header>

            <div class="body">
                <ul>
                    @foreach($cart as $product)
                        <li class="product">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="product-image">
                                        <a href="#0"><img src="{{ Storage::url($product->options->image) }}" alt="{{ $product->options->slug }}"></a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-sm-9"><h4>{{ $product->name }}</h4></div>
                                        <div class="col-sm-3"><h4>{{ formatCurrency($product->price) }}đ</h4></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"><a href="#0" class="btn btn-danger btn-sm">Xóa</a></div>
                                        <div class="col-md-6">Số lượng: {{ $product->qty }}</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    <!-- products added to the cart will be inserted here using JavaScript -->
                </ul>
            </div>

            <footer>
                <a href="#0" class="checkout"><em>Thanh toán</em></a>
            </footer>
        </div>
    </div> <!-- .cd-cart -->
</div> <!-- cd-cart-container -->