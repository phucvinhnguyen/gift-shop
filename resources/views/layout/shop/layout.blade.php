<!DOCTYPE html>
<!-- saved from url=(0056)http://demo.minimalthemes.net/shopping-static/index.html -->
<html lang="en" class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping</title>

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

    <link href="{{ asset('css/font-awesome/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- owl Style -->
    <link rel="stylesheet" href="{{ asset('css/carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel/owl.transitions.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <![endif]-->
    <style type="text/css">.fancybox-margin{margin-right:0px;}</style>

<body style="">
    <div id="wrapper">
    @include('layout.shop.partials.header')
    @include('layout.shop.partials.menu')

    @yield('content')

    @include('layout.shop.partials.footer')

    @yield('scripts')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    {{--<script type="text/javascript" src="{{ asset('js/demo.js') }}"></script>--}}

    <!-- owl carousel -->
    <script src="{{ asset('js/carousel/owl.carousel.min.js') }}"></script>

    <!-- rating -->
    <script src="{{ asset('js/jquery/jquery.raty.js') }}"></script>
    <script src="{{ asset('js/labs.js') }}" type="text/javascript"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script src="{{ asset('js/jquery/jquery.mousewheel-3.0.6.pack.js') }}" type="text/javascript"></script>

    <!-- fancybox -->
    <script type="text/javascript" src="{{ asset('js/jquery/jquery.fancybox.js') }}"></script>

    <!-- custom js -->
    <script src="{{ asset('js/shop.js') }}"></script>

    @yield('embed-scripts')
    </div>
</body>
</html>