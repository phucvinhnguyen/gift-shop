<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>NV | @yield('title')</title>
    <meta name="description" content=" | Online store">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom-style.css') }}">

    <link type="text/css" rel="stylesheet" href="{{ asset('css/owl-carousel/owl.carousel.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/owl-carousel/owl.theme.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/font-awesome/font-awesome.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/woocommerce-layout.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/woocommerce.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/main-style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/cart/cart-style.css') }}">

    <script type="text/javascript" src="{{ asset('js/jquery/jquery-1.7.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

    <style type="text/css">
        body { background-color:#ffffff }
        .header { background-color:#ffffff }
    </style>

    <style type="text/css">
        h1 { font: normal 37px/39px Nunito; color:#333333; }
        h2 { font: normal 37px/39px Nunito; color:#333333; }
        h3 { font: normal 25px/32px Nunito; color:#333333; }
        h4 { font: normal 14px/18px Nunito; color:#333333; }
        h5 { font: normal 12px/18px Nunito; color:#333333; }
        h6 { font: normal 12px/18px Nunito; color:#333333; }
        body { font-weight: normal;}
        .logo_h__txt, .logo_link { font: normal 72px/72px Nunito;  color:#049CDB; }
        .sf-menu > li > a { font: normal 23px/25px Nunito;  color:#333333; }
        .nav.footer-nav a { font: normal 15px/20px Nunito;  color:#777777; }
    </style>

    <script type="text/javascript">
        // Init navigation menu
        jQuery(function(){
        // main navigation init
            jQuery('ul.sf-menu').superfish({
                delay: 1000, // the delay in milliseconds that the mouse can remain outside a sub-menu without it closing
                animation: {
                    opacity: "show",
                    height: "show"
                }, // used to animate the sub-menu open
                speed: "normal", // animation speed
                autoArrows: true, // generation of arrow mark-up (for submenu)
                disableHI: true // to disable hoverIntent detection
            });

        //IPad/IPhone
        var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
            ua = navigator.userAgent,
            gestureStart = function () {
                viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
            },
            scaleFix = function () {
                if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
                    viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
                    document.addEventListener("gesturestart", gestureStart, false);
                }
            };
            scaleFix();
        })
    </script>
    <style type="text/css">@media(max-width: 767px){.sf-menu{display:none;} .select-menu{display: block;}}</style>
</head>

<body class="single single-product woocommerce woocommerce-page has_woocommerce has_shop">
    <div id="motopress-main" class="main-holder">
        <!--Begin #motopress-main-->
        @include('layout.shop.partials.header')
        <div class="motopress-wrapper content-holder clearfix woocommerce">
            @yield('content')
        </div>

    @include('layout.shop.partials.footer')
        <!--End #motopress-main-->
    </div>

    @yield('scripts')

    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/cart-plugin.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/superfish.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery/jquery.mobilemenu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery/jquery.zaccordion.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('cherry/cherry-plugin.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom-script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/wow.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/carousel/owl.carousel.min.js') }}"></script>

    <script>
        (function($) {
            /*$('.add_to_cart_button').click(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
               var productId = $(this).data('product_id');
               $.ajax({
                   type: 'POST',
                   url: '{{ route('product.cart.add') }}',
                   data: {
                       product_id: productId
                   },
                   dataType: 'json',
                   success: function (data) {
                       console.log(data);
                   }
               })
            });*/
        })(jQuery);
    </script>
    @yield('embed-scripts')
</body>
</html>