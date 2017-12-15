<div class="main-nav"><!--end main-nav -->
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('shop.index') }}" class="active">Trang chủ</a><div class="curve"></div></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    @foreach($categories as $category)
                                        <li><a href="{{ route('category.index', ['reqCategory' => $category->slug]) }}">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{ route('shop.intro') }}">Giới thiệu</a></li>
                            <li><a href="{{ route('shop.contact') }}">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 machart">
                    <button id="popcart" class="btn btn-default btn-chart btn-sm "><span class="mychart">Giỏ hàng</span>|<span class="allprice">{{ Cart::subtotal() }}</span></button>
                    <div class="popcart">
                        @if (count($cart) > 0)
                        <table class="table table-condensed popcart-inner">
                            <tbody>
                            @foreach($cart as $item)
                            <tr>
                                <td>
                                    <a href="#"><img src="{{ $cart->options->image }}" alt="" class="img-responsive"></a>
                                </td>
                                <td><a href="#">{{ $cart->name }}</a><br><span>Color: green</span></td>
                                <td>{{ $cart->qty }}X</td>
                                <td>{{ $cart->price }}</td>
                                <td><a href="#"><i class="fa fa-times-circle fa-2x"></i></a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <span class="sub-tot">Tạm tính : <span>{{ Cart::subtotal() }}</span></span>
                        <br>
                        <div class="btn-popcart">
                            <a href="#" class="btn btn-default btn-red btn-sm">Thanh toán</a>
                        </div>
                        <div class="popcart-tot">
                            <p>
                                Tổng cộng<br>
                                <span>{{ Cart::total() }}</span>
                            </p>
                        </div>
                        @else
                            <span class="mychart">Chưa có sản phẩm nào trong giỏ hàng.</span>
                        @endif
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--end main-nav -->