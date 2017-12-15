<div class="container">
    <div class="row">
        <div class="col-md-9"><!--Main content-->
            <div class="title-bg">
                <div class="title">Giới thiệu cửa hàng</div>
            </div>
            <p class="ct">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="" class="btn btn-default btn-red btn-sm">Read More</a>

            <div class="title-bg">
                <div class="title">Sản phẩm mới</div>
            </div>
            <div class="row prdct"><!--Products-->
                @foreach($newProducts as $product)
                <div class="col-md-4">
                    @if ($product->sale > 0)
                        @include('layout.shop.product.product-sale', ['product' => $product])
                    @else
                        @include('layout.shop.product.product', ['product' => $product])
                    @endif
                </div>
                @endforeach
            </div><!--Products-->
            <div class="spacer"></div>
        </div><!--Main content-->
        <div class="col-md-3"><!--sidebar-->
            <div class="title-bg">
                <div class="title">Danh mục</div>
            </div>

            <div class="categorybox">
                <ul>
                    @foreach($category as $row)
                        <li><a href="{{ route('category.index', ['reqCategory' => $row->slug]) }}">{{ $row->name }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="ads">
                <a href="#"><img src="images/ads.png" class="img-responsive" alt="" /></a>
            </div>

        </div><!--sidebar-->
    </div>
</div>