@extends('layout.shop.layout');
@section('content')
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="row">
                <div class="span12">
                    <section class="title-section">
                        <h1 class="title-header">Đặt hàng thành công</h1>
                        {{--<!-- BEGIN BREADCRUMBS-->
                        <ul class="breadcrumb breadcrumb__t">
                            <li><a href="#">Home</a></li>
                            <li class="divider"></li>
                            <li class="active">Checkout</li>
                        </ul>
                        <!-- END BREADCRUMBS -->--}}
                        <div class="clearfix"></div></section><!-- .title-section -->
                </div>
            </div>
            <div class="row">
                <div class="span9 right" id="content">
                    <div class="page type-page">
                        <div class="woocommerce">
                            <p>Cám ơn bạn. Chúng tôi vừa nhận đơn hàng.</p>
                            <ul class="order_details">
                                <li class="order">
                                    Mã đơn hàng: <strong>2149</strong>
                                </li>
                                <li class="date">
                                    Ngày: <strong>December 1, 2017</strong>
                                </li>
                                <li class="total">
                                    Tổng tiền: <strong><span class="amount">$95.00</span></strong>
                                </li>
                                <li class="method">
                                    Hình thức thanh toán: <strong>Direct Bank Transfer</strong>
                                </li>
                            </ul>
                            <div class="clear"></div>
                                <p>Chúng tôi sẽ gọi cho bạn vào số điện thoại theo thông tin khách hàng để xác nhận việc đặt hàng.</p>
                            <h2>Thông tin mua hàng</h2>
                            <table class="shop_table order_details">
                                <thead>
                                <tr>
                                    <th class="product-name">Sản phẩm</th>
                                    <th class="product-total">Tổng cộng</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr class="order_item">
                                        <td class="product-name">
                                            <a href="#">Engraved Desktop</a><strong class="product-quantity">× 1</strong>
                                        </td>
                                        <td class="product-total">
                                            <span class="amount">$95.00</span>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th scope="row">Tạm tính:</th>
                                        <td><span class="amount">$95.00</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Giao hàng:</th>
                                        <td>Miễn Phí</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Hình thức thanh toán:</th>
                                        <td>Chuyển khoảng Ngân Hàng</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tổng cộng:</th>
                                        <td><span class="amount">$95.00</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Ghi chú:</th>
                                        <td>fdgdfgd</td>
                                    </tr>
                                </tfoot>
                            </table>
                            <header>
                                <h2>Thông tin khách hàng</h2>
                            </header>

                            <table class="shop_table shop_table_responsive customer_details">
                                <tbody>
                                    <tr><th>Email:</th><td data-title="Email">aaa@mail.com</td></tr>
                                    <tr><th>Telephone:</th><td data-title="Telephone">123456789</td></tr>
                                </tbody>
                            </table>

                            <div class="col2-set addresses">
                                <div class="col-1">
                                    <header class="title">
                                        <h3>Địa chỉ thanh toán</h3>
                                    </header>
                                    <address>
                                        SSSSSSSSSSSSS SSSSSSSSSSSSSSS<br>aaaaaâ<br>aaaaâ<br>Vietnam
                                    </address>
                                </div><!-- /.col-1 -->

                                <div class="col-2">
                                    <header class="title">
                                        <h3>Địa chỉ giao hàng</h3>
                                    </header>
                                    <address>
                                        SSSSSSSSSSSSSSSSSSSS SSSSSSSSSSSSSSSSS<br>aaaaaaaaaaa<br>aa<br>Vietnam
                                    </address>
                                </div><!-- /.col-2 -->
                            </div><!-- /.col2-set -->
                            <div class="clear"></div>
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