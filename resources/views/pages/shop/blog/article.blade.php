@extends('layout.shop.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="span12" data-motopress-wrapper-file="single.php" data-motopress-wrapper-type="content">
            <div class="row">
                <div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
                    <section class="title-section">
                        <h1 class="title-header">Test</h1>
                        <!-- BEGIN BREADCRUMBS-->
                        {{--<ul class="breadcrumb breadcrumb__t">
                            <li><a href="{{ route('shop.index') }}">Home</a></li>
                            <li class="divider"></li>
                            <li><a href="">Uncategorized</a></li><li class="divider"></li><li class="active">Aliquam erat volutpat</li>
                        </ul>--}}
                        <!-- END BREADCRUMBS -->
                        <div class="clearfix"></div>
                    </section><!-- .title-section -->
                </div>
            </div>
            <div class="row">
                <div class="span12 right right" id="content">
                    <article class="post">
                        <figure class="featured-thumbnail thumbnail large" >
                            <img src="//" data-src="{{ Storage::url('public/products/1.png') }}" alt="Aliquam erat volutpat" >
                        </figure>
                        <!-- Post Content -->
                        <div class="post_content">
                            <h3>Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</p>
                            <div class="clear"></div>
                        </div>
                        <!-- //Post Content -->

                        <!-- Post Meta -->
                        <div class="post_meta meta_type_line">
                            <div class="post_meta_unite clearfix">
                                <div class="meta_group clearfix">

                                    <div class="post_category">
                                        <i class="icon-bookmark"></i>
                                        <a href="#" rel="category tag">Uncategorized</a>
                                    </div>
                                    <div class="post_date">
                                        <i class="icon-calendar"></i>
                                        <time datetime="2014-05-27T06:31:56">May 27, 2014</time>
                                    </div>
                                    <div class="post_author">
                                        <i class="icon-user"></i>
                                        <a href="#" title="Posts by admin" rel="author">admin</a>
                                    </div>
                                    <div class="post_comment">
                                        <i class="icon-comments"></i>
                                        <a href="#" class="comments-link"  title="Comment on Aliquam erat volutpat">3 comments</a>
                                    </div>

                                </div>
                                <div class="meta_group clearfix"></div>
                                <div class="meta_group clearfix"></div>
                            </div>
                        </div><!--// Post Meta -->
                    </article><!-- .share-buttons -->

                    <!-- Facebook Like Button -->

                    <!-- Google+ Button -->

                    <ul class="share-buttons unstyled clearfix">
                        <li class="twitter">

                        </li>
                        <li class="facebook">
                            <div id="fb-root"></div><div class="fb-like" data-href="#" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false" data-font="arial"></div>
                        </li>
                        <li class="google">
                            <div class="g-plusone" data-size="medium" data-href="#"></div>
                        </li>
                        <li class="pinterest">

                        </li>
                    </ul><!-- //.share-buttons -->

                    <div class="post-author clearfix">
                        <h3 class="post-author_h">Written by <a href="#" title="Posts by admin" rel="author">admin</a></h3>
                        <p class="post-author_gravatar"><img alt="" src="" class="avatar avatar-80 photo" height="80" width="80" /></p>
                        <div class="post-author_desc">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean non ummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis sere natoque penati bus et magnis dis. Lorem ipsum dolor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit lorem. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris.
                            <div class="post-author_link">
                                <p>View all posts by: <a href="#" title="Posts by admin" rel="author">admin</a></p>
                            </div>
                        </div>
                    </div><!--.post-author-->

                    {{--<div class="related-posts"><h3 class="related-posts_h"></h3>
                        <ul class="related-posts_list clearfix">
                            <li class="related-posts_item">
                                <figure class="thumbnail featured-thumbnail">
                                    <a href="#" title="Mauris posuere"><img data-src="https://livedemo00.template-help.com/woocommerce_53330/wp-content/uploads/2012/05/post-img4-250x150.jpg" alt="Mauris posuere" /></a>
                                </figure><a href="#" >Mauris posuere</a>
                            </li>
                        </ul>
                    </div><!-- BEGIN Comments -->--}}

                </div>
                {{--<div class="span3 sidebar" id="sidebar" data-motopress-type="static-sidebar"  data-motopress-sidebar-file="sidebar.php">

                    <div id="my-recent-comments-2" class="widget">
                        <h3>Recent comments</h3>
                        <ul class="comments-custom unstyled">
                            <li class="comments-custom_li">
                                <figure class="thumbnail featured-thumbnail"><img alt="" src="" class="avatar avatar-64 photo" height="64" width="64" /></figure>								<div class="meta_format"><h4 class="comments-custom_h_author">admin</h4></div>				<div class="meta_format"><time datetime="2014-05-27T08:09:00">May 27, 2014 8:09 am</time></div>			<div class="clear"></div>
                                <div class="comments-custom_txt">
                                    <a href="#comment-24" title="Go to this comment">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean...</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>--}}
            </div>
        </div>
    </div>
</div>
@endsection