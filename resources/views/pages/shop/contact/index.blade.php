@extends('layout.shop.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="row">
                <div class="span12">
                    <section class="title-section">
                        <h1 class="title-header">Liên hệ</h1>
                        <!-- BEGIN BREADCRUMBS-->
                        <ul class="breadcrumb breadcrumb__t">
                            <li><a href="{{ route('shop.index') }}">Trang chủ</a></li>
                            <li class="divider"></li>
                            <li class="active">Liên hệ</li>
                        </ul><!-- END BREADCRUMBS -->
                    </section><!-- .title-section -->
                </div>
            </div>
            <div id="content" class="row">
                <div class="span12">
                    <div class="page">
                        <div class="row">
                            <div class="span4">
                                <h2>Thông tin liên hệ</h2>
                                <address>
                                    <strong>Ngân Vinh Inc.<br /></strong>
                                    Chung cư <strong>Hưng Phát</strong><br/>
                                        <strong>928 Lê Văn Lương, Huyện Nhà Bè, TP. Hồ Chí Minh.</strong><br />
                                    Telephone: +84 8888 5355<br />
                                    E-mail: <a href="mailto:info@tramhuongnganvinh.com">info@tramhuongnganvinh.com</a><br />
                                </address><!-- address (end) -->
                            </div>
                            <div class="span8">

                            </div>
                        </div><!-- .row (end) -->
                        <div class="clear"></div>
                        <!--.pagination-->
                    </div><!--post-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
