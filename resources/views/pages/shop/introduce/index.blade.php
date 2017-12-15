@extends('layout.shop.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-wrap">
                    <div class="page-title-inner">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="bread"><a href="{{ route('shop.index') }}">Trang chủ</a> &rsaquo; Giới thiệu</div>
                                <div class="bigtitle">Giới thiệu</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9"><!--Main content-->
                <div class="title-bg">
                    <div class="title">About Shopping</div>
                </div>
                <div class="page-content">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indusy standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesettin industry.
                    </p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indusy standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesettin industry.
                    </p>
                </div>
            </div>
            <div class="col-md-3"><!--sidebar-->
                <div class="ads">
                    <a href="#"><img src="images/ads.png" class="img-responsive" alt="" /></a>
                </div>

                <div class="title-bg">
                    <div class="title">Best Seller</div>
                </div>
                <div class="best-seller">
                    <ul>
                        <li class="clearfix">
                            <a href="#"><img src="images/demo-img.jpg" alt="" class="img-responsive mini" /></a>
                            <div class="mini-meta">
                                <a href="#" class="smalltitle2">Panasonic M3</a>
                                <p class="smallprice2">Price : $122</p>
                            </div>
                        </li>
                        <li class="clearfix">
                            <a href="#"><img src="images/demo-img.jpg" alt="" class="img-responsive mini" /></a>
                            <div class="mini-meta">
                                <a href="#" class="smalltitle2">Panasonic M3</a>
                                <p class="smallprice2">Price : $122</p>
                            </div>
                        </li>
                        <li class="clearfix">
                            <a href="#"><img src="images/demo-img.jpg" alt="" class="img-responsive mini" /></a>
                            <div class="mini-meta">
                                <a href="#" class="smalltitle2">Panasonic M3</a>
                                <p class="smallprice2">Price : $122</p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div><!--sidebar-->
        </div>
        <div class="spacer"></div>
    </div>
@endsection