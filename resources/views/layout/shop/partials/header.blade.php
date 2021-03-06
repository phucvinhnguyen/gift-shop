<div class="header"><!--Header -->
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-4 main-logo">
                <a href="{{ route('shop.index') }}"><img src="{{ asset('images/logo.png') }}" alt="logo" class="logo img-responsive"></a>
            </div>
            <div class="col-md-8">
                <div class="pushright">
                    <div class="top">
                        <a href="#" id="reg" class="btn btn-default btn-dark">Đăng nhập<span>-- hoặc --</span>Đăng ký</a>
                        <div class="regwrap">
                            <div class="row">
                                <div class="col-md-6 regform">
                                    <div class="title-widget-bg">
                                        <div class="title-widget">Đăng nhập</div>
                                    </div>
                                    <form role="form">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" placeholder="password">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-default btn-red btn-sm">Đăng nhập</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <div class="title-widget-bg">
                                        <div class="title-widget">Đăng ký</div>
                                    </div>
                                    <p>
                                        Thành viên được hưởng ưu đãi chiết khấu, quà tặng, ...
                                    </p>
                                    <button class="btn btn-default btn-yellow">Đăng ký</button>
                                </div>
                            </div>
                        </div>
                        <div class="srch-wrap">
                            <a href="#" id="srch" class="btn btn-default btn-search"><i class="fa fa-search"></i></a>
                        </div>
                        <div class="srchwrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="search" class="col-sm-2 control-label">Tìm</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="search">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--Header -->