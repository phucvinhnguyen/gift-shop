@extends('layout.shop.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="row">
                <div class="span12">
                    <section class="title-section">
                        <h1 class="title-header">FAQs</h1>
                        <!-- BEGIN BREADCRUMBS-->
                        {{--<ul class="breadcrumb breadcrumb__t">
                            <li><a href="https://livedemo00.template-help.com/woocommerce_53330">Home</a></li>
                            <li class="divider"></li><li><a href="#">Giới thiệu</a></li>
                            <li class="divider"></li> <li class="active">Câu hỏi thường gặp</li>
                        </ul>--}}
                        <!-- END BREADCRUMBS -->
                    </section><!-- .title-section -->
                </div>
            </div>
            <div class="row">
                <div class="span12" id="content">
                    <div id="post-12" class="post-12 page type-page status-publish hentry">
                        <div class="clear"></div>
                    </div><!--post-->
                    @if (isset($content) && !empty($content))
                        {{ $content->content }}
                    @else
                        Chưa có nội dung.
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection