@extends('layout.shop.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="row">
                <div class="span12">
                    <div class="page type-page status-publish hentry">
                        {{--Banner menu--}}
                        @if (!empty($banners))
                        <div class="banners_wrapper">
                            <div class="banners_wrapper_wrap_inner">
                                <div class="row ">
                                    @foreach($banners as $banner)
                                    <div class="span4">
                                        <div class="banner-wrap wow fadeIn animated" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                                            <figure class="featured-thumbnail"><a href="{{ $banner->url }}" title=""><img src="{{ Storage::url($banner->name) }}" alt=""></a></figure>
                                            <div class="content-wrapper">
                                                <h5>{!! $banner->title !!}</h5>
                                                <p>{!! $banner->description !!}</p>
                                                <div class="link-align banner-btn"><a href="{{ $banner->url }}" title="Shop now!" class="btn btn-link" target="_self">Shop now!</a></div>
                                            </div>
                                        </div><!-- .banner-wrap (end) -->
                                    </div>
                                    @endforeach
                                </div><!-- .row (end) -->
                            </div>
                        </div>
                        @endif

                        @if (isset($shopServices) && !empty($shopServices))
                        <div class="services_wrapper1">
                            <div class="services_wrapper1_wrap_inner">
                                <div class="row ">

                                    @foreach($shopServices as $service)
                                    <div class="span4">
                                        <div class="service-box bc{{ $loop->index + 1 }} wow fadeIn animated" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                                            <div class="service-box_body">
                                                <h2>{!! $service->title !!}</h2>
                                                <div class="service-box_txt"> {{ $service->description }}</div>
                                            </div>
                                        </div><!-- /Service Box -->
                                    </div>
                                    @endforeach
                                </div><!-- .row (end) -->
                            </div>
                        </div>
                        @endif

                        @include('pages.shop.home.feature-product')

                        <div class="newsletter_wrapper wow fadeIn animated" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;"><div class="newsletter_wrapper_wrap_inner">
                                <div class="row">
                                    <div class="span6"><h2>Đăng ký</h2>
                                        <p>nhận thông tin sản phẩm mới.</p></div>
                                    <div class="span6">
                                        <div id="mc4wp-form-1" class="form mc4wp-form">
                                            <form method="post" action="#">
                                                <p>
                                                    <label>Email address: </label>
                                                    <input type="email" id="mc4wp_email" name="EMAIL" placeholder="Nhập địa chỉ email của bạn." required="">
                                                </p>
                                                <p><input type="submit" value="Sign up"></p>
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- .row (end) -->
                            </div>
                        </div>

                        @include('pages.shop.home.onsale-product')

                        <div class="services_wrapper2">
                            <div class="services_wrapper2_wrap_inner">
                                <div class="row ">
                                    <div class="span4">
                                        <div class="service-box wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: hidden; animation-duration: 1s; animation-delay: 0.2s; animation-name: none;">
                                            <div class="service-box_body">
                                                <h2 class="title">Đảm bảo <strong>100%</strong></h2>
                                                <div class="service-box_txt">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                                            </div>
                                        </div><!-- /Service Box -->
                                    </div>
                                    <div class="span4">
                                        <div class="service-box truck-icon wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: hidden; animation-duration: 1s; animation-delay: 0.4s; animation-name: none;">
                                            <div class="service-box_body">
                                                <h2 class="title">Giao hàng <strong>miễn phí</strong></h2>
                                                <div class="service-box_txt">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                                            </div>
                                        </div><!-- /Service Box -->
                                    </div>
                                    <div class="span4">
                                        <div class="service-box refresh-icon wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s" style="visibility: hidden; animation-duration: 1s; animation-delay: 0.6s; animation-name: none;">
                                            <div class="service-box_body">
                                                <h2 class="title">14 ngày <strong>đổi hàng</strong></h2>
                                                <div class="service-box_txt">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                                            </div>
                                        </div><!-- /Service Box -->
                                    </div>
                                </div><!-- .row (end) -->
                            </div>
                        </div>
                        <div class="clear"></div>
                        <!--.pagination-->
                    </div><!--post-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection