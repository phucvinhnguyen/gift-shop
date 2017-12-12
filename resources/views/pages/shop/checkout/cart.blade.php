@extends('layout.shop.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="row">
                <div class="span12">
                    <section class="title-section">
                        <h1 class="title-header">Giỏ hàng</h1>
                        <!-- BEGIN BREADCRUMBS-->
                    {{--<ul class="breadcrumb breadcrumb__t">
                        <li><a href="{{ route('shop.index') }}">Home</a></li>
                        <li class="divider"></li>
                        <li class="active">Cart</li>
                    </ul>--}}
                    <!-- END BREADCRUMBS -->
                        <div class="clearfix"></div>
                    </section><!-- .title-section -->
                </div>
            </div>
            <div class="row">
                <div class="span12 right right" id="content">
                    <div class="page type-page">
                        <div class="woocommerce">
                            <form action="" method="post">
                                <table class="shop_table cart" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-quantity">Số lượng</th>
                                        <th class="product-subtotal">Tổng cộng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if (isset($cart) && !empty($cart))
                                        @foreach($cart as $row)
                                            <tr class="cart_item">
                                                <td class="product-remove">
                                                    <a href="#" class="remove" title="Remove this item">×</a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img width="90" height="90" src="" class="attachment-shop_thumbnail" alt=""></a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#">{{ $row->name }}</a>
                                                </td>
                                                <td class="product-price">
                                                    <span class="amount">{{ $row->price }}</span>
                                                </td>
                                                <td class="product-quantity">
                                                    <div class="quantity">
                                                        <input type="number" step="1" min="0" max="150" name="" value="{{ $row->qty }}" title="Qty" class="input-text qty text" size="4">
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">
                                                    <span class="amount">{{ $row->price * $row->qty }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="6" class="actions">
                                                <div class="coupon">
                                                    <label for="coupon_code">Mã giảm giá:</label>
                                                    <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Mã giảm giá">
                                                    <input type="submit" class="button" name="apply_coupon" value="Nhập mã">
                                                </div>
                                                <input type="submit" class="button" name="update_cart" value="Cập nhật giỏ hàng">
                                        </tr>
                                    @else
                                        Chưa có sản phẩm trong giỏ hàng.
                                    @endif
                                    </tbody>
                                </table>
                            </form>

                            <div class="cart-collaterals">
                                <div class="cart_totals ">
                                    <h2>Giỏ hàng</h2>
                                    <table cellspacing="0">
                                        <tbody><tr class="cart-subtotal">
                                            <th>Tạm tính</th>
                                            <td><span class="amount">{{ Cart::subtotal() }}</span></td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Giao hàng</th>
                                            <td>Miễn phí</td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Tổng cộng</th>
                                            <td><strong><span class="amount">{{ Cart::total() }}</span></strong> </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <div style="margin: 10px auto;">
                                        <a href="#" class="btn checkout-button button alt wc-forward">Tiến hành thanh toán</a>
                                    </div>
                                </div>
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