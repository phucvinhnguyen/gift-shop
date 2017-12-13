<div class="elements-wrapper">
    <div class="shop-and-cart">
        <div class="shop-menu-wrapper">
            <div class="cherry-wc-account dropdown">
                <a class="cherry-wc-account_title" data-toggle="dropdown" href="#">Khách hàng</a>
                <div class="cherry-wc-account_content">
                    <ul class="cherry-wc-account_list">
                        <li class="cherry-wc-account_list_item"><a href="#">Đơn hàng</a></li>
                        <li class="cherry-wc-account_list_item"><a href="#">Danh sách yêu thích</a></li>
                    </ul>
                    <div class="cherry-wc-account_auth"><a href="#" class="not-logged">Đăng ký tài khoản</a></div>
                </div>
            </div>
            <div class="shop-nav">
                <ul id="shopnav" class="shop-menu">
                    <li class="menu-item"><a href="{{ route('shop.ship') }}">Giao hàng</a></li>
                    <li class="menu-item"><a href="#">Trợ giúp</a></li>
                </ul>
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
                    <li class="menu-item current-menu-item current_page_item"><a href="{{ route('shop.index') }}">Trang chủ</a></li>
                    <li class="menu-item menu-item-has-children"><a href="#">Sản phẩm</a>
                        @if (!empty($categories))
                        <ul class="sub-menu">
                            @foreach($categories as $category)
                                <li class="menu-item"><a href="{{ route('category.index', ['reqCategory' => $category->slug]) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#">Giới thiệu</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="{{ route('shop.intro') }}">Trầm hương</a></li>
                            <li class="menu-item"><a href="{{ route('shop.faq') }}">Câu hỏi thường gặp</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="{{ route('blog.article') }}">Bài viết</a></li>
                    <li class="menu-item"><a href="{{ route('shop.contact') }}">Liên hệ</a></li>
                </ul>
            </nav><!-- END MAIN NAVIGATION -->
        </div>
        <div class="clearfix"></div>
    </div>
</div>