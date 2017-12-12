@extends('layout.shop.layout');
@section('content')
<div class="container">
    <div class="row">
        <div class="span12" data-motopress-wrapper-file="page.php" data-motopress-wrapper-type="content">
            <div class="row">
                <div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
                    <section class="title-section">
                        <h1 class="title-header">Order Received	</h1>
                        <!-- BEGIN BREADCRUMBS-->
                        <ul class="breadcrumb breadcrumb__t">
                            <li><a href="#">Home</a></li>
                            <li class="divider"></li>
                            <li class="active">Checkout</li>
                        </ul>
                        <!-- END BREADCRUMBS -->
                        <div class="clearfix"></div></section><!-- .title-section -->
                </div>
            </div>
            <div class="row">
                <div class="span9 right right" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
                    <div class="page type-page">
                        <div class="woocommerce">
                            <p>Thank you. Your order has been received.</p>
                            <ul class="order_details">
                                <li class="order">
                                    Order Number:<strong>2149</strong>
                                </li>
                                <li class="date">
                                    Date:<strong>December 1, 2017</strong>
                                </li>
                                <li class="total">
                                    Total:<strong><span class="amount">$95.00</span></strong>
                                </li>
                                <li class="method">
                                    Payment Method:<strong>Direct Bank Transfer</strong>
                                </li>
                            </ul>
                            <div class="clear"></div>
                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                            <h2>Our Bank Details</h2>
                            <ul class="order_details bacs_details">
                            </ul>	<h2>Order Details</h2>
                            <table class="shop_table order_details">
                                <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-total">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="order_item">
                                    <td class="product-name">
                                        <a href="http://livedemo00.template-help.com/woocommerce_53330/product/product-15/">Engraved Desktop</a> <strong class="product-quantity">× 1</strong>						</td>
                                    <td class="product-total">
                                        <span class="amount">$95.00</span>						</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th scope="row">Subtotal:</th>
                                    <td><span class="amount">$95.00</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">Shipping:</th>
                                    <td>Free Shipping</td>
                                </tr>
                                <tr>
                                    <th scope="row">Payment Method:</th>
                                    <td>Direct Bank Transfer</td>
                                </tr>
                                <tr>
                                    <th scope="row">Total:</th>
                                    <td><span class="amount">$95.00</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">Note:</th>
                                    <td>fdgdfgd</td>
                                </tr>
                                </tfoot>
                            </table>
                            <header>
                                <h2>Customer details</h2>
                            </header>
                            <table class="shop_table shop_table_responsive customer_details">
                                <tbody><tr><th>Email:</th><td data-title="Email">aaa@mail.com</td></tr><tr><th>Telephone:</th><td data-title="Telephone">123456789</td></tr></tbody></table>
                            <div class="col2-set addresses">
                                <div class="col-1">
                                    <header class="title">
                                        <h3>Billing Address</h3>
                                    </header>
                                    <address>
                                        SSSSSSSSSSSSS SSSSSSSSSSSSSSS<br>aaaaaâ<br>aaaaâ<br>Vietnam</address>
                                </div><!-- /.col-1 -->

                                <div class="col-2">
                                    <header class="title">
                                        <h3>Shipping Address</h3>
                                    </header>
                                    <address>
                                        SSSSSSSSSSSSSSSSSSSS SSSSSSSSSSSSSSSSS<br>aaaaaaaaaaa<br>aa<br>Vietnam		</address>
                                </div><!-- /.col-2 -->
                            </div><!-- /.col2-set -->
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                        <!--.pagination-->
                    </div><!--post-->
                </div>
                <div class="span3 sidebar" id="sidebar" data-motopress-type="static-sidebar" data-motopress-sidebar-file="sidebar.php">

                    <div id="my-recent-comments-2" class="widget">
                        <h3>Recent comments</h3>
                        <ul class="comments-custom unstyled">
                            <li class="comments-custom_li">
                                <figure class="thumbnail featured-thumbnail"><img alt="" src="./Checkout _ Gifts_files/b263802e2004e058851acabb4111135e" class="avatar avatar-64 photo" height="64" width="64"></figure>								<div class="meta_format"><h4 class="comments-custom_h_author">admin</h4></div>				<div class="meta_format"><time datetime="2014-05-27T08:09:00">May 27, 2014 8:09 am</time></div>			<div class="clear"></div>
                                <div class="comments-custom_txt">
                                    <a href="#" title="Go to this comment">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean...</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection