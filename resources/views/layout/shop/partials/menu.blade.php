<div class="elements-wrapper">
    <div class="shop-and-cart">
        <div class="shop-menu-wrapper">
            <div class="cherry-wc-account dropdown">
                <a class="cherry-wc-account_title" data-toggle="dropdown" href="#">Tài khoản Khách hàng</a>
                <div class="cherry-wc-account_content">
                    <ul class="cherry-wc-account_list">
                        <li class="cherry-wc-account_list_item"><a href="#">Đơn hàng</a></li>
                        <li class="cherry-wc-account_list_item "><a href="#">So sánh sản phẩm</a></li>
                        <li class="cherry-wc-account_list_item"><a href="#">Danh sách yêu thích</a></li>
                    </ul>
                    <div class="cherry-wc-account_auth"><a href="#" class="not-logged">Đăng ký tài khoản</a></div>
                </div>
            </div>
            <div class="shop-nav">
                <ul id="shopnav" class="shop-menu">
                    <li class="cherry-compare menu-item"><a href="#">So sánh</a></li>
                    <li class="menu-item"><a href="#">Danh sách yêu thích</a></li>
                    <li class="menu-item"><a href="#">Giao hàng</a></li>
                    <li class="menu-item"><a href="#">Trợ giúp</a></li>
                </ul>
            </div>
        </div>
        <div class="cart-wrapper">
            <div id="woocommerce_widget_cart-3" class="cart-holder">
                <h3 unselectable="on" style="user-select: none;">Giỏ hàng</h3>
                <div class="widget_shopping_cart_content">
                    <!-- begin product list -->
                    <ul class="cart_list product_list_widget ">
                        <li class="empty">Chưa chọn sản phẩm.</li>
                    </ul>
                    <!-- end product list -->
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="search-menu">
        <div class="search-wrapper">
            <!-- BEGIN SEARCH FORM -->
            <div class="search-form search-form__h clearfix">
                <form id="search-header" class="navbar-form pull-right" method="get" action="#" accept-charset="utf-8">
                    <input type="text" name="value" class="search-form_it">
                    <input type="submit" value="Tìm kiếm" id="search-form" class="search-form_is btn btn-primary">
                </form>
            </div>
            <!-- END SEARCH FORM -->
        </div>
        <div class="menu-wrapper logo_box">
            <!-- BEGIN MAIN NAVIGATION -->
            <nav class="nav nav__primary">
                <ul id="topnav" class="sf-menu">
                    <li class="menu-item current-menu-item current_page_item"><a href="">Trang chủ</a></li>
                    <li class="menu-item menu-item-has-children"><a href="shop/">Sản phẩm</a>
                        @if (!empty($categories))
                        <ul class="sub-menu">
                            @foreach($categories as $category)
                                <li class="menu-item"><a href="{{ $category->slug }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="gioi-thieu/">Giới thiệu</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="gioi-thieu/tram-huong">Trầm hương</a></li>
                            <li class="menu-item"><a href="gioi-thieu/cau-hoi">Câu hỏi thường gặp</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="bai-viet/">Bài viết</a></li>
                    <li class="menu-item"><a href="lien-he/">Liên hệ</a></li>
                </ul>
            </nav><!-- END MAIN NAVIGATION -->
        </div>
        <div class="clearfix"></div>
    </div>
</div>