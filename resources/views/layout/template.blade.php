<!DOCTYPE html>
<html>

<head>
    <title>{{getenv('STORE_NAME')}} - Confiança e Agilidade na entrega</title>
    <meta name="csrf_token" content="{{ csrf_token() }}">

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Main stylesheet -->
    <link href="{{asset('css/hallooou.css')}}" rel="stylesheet">

    <!-- Color stylesheet -->
    <link href="{{asset('css/colors.css')}}" rel="stylesheet">
    <link href="{{asset('css/colors_2.css')}}" rel="stylesheet">

    <!-- Parallax stylesheet -->
    <link href="{{asset('css/parallax.css')}}" rel="stylesheet">

    <!-- Plugin stylesheets -->
    <link href="{{asset('css/plugins/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/jquery.mb.YTPlayer.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js')}} for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <script>
        document.createElement('video');
    </script>
    <![endif]-->

    <!-- Include styles -->
{{--<link rel="stylesheet"--}}
{{--href="{{ getenv('APP_ENV') === 'local' ? asset('tmp/css/style.css') : elixir('dist/css/style.min.css') }}">--}}
<!-- Finish styles -->

</head>

<body>

@include('layout.header')

@yield('content')

@include('layout.footer')

<!-- Include scripts -->

<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="{{asset('js/plugins/wow.min.js')}}"></script>
<script src="{{asset('js/plugins/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('js/plugins/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery.mb.YTPlayer.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery.countTo.js')}}"></script>
<script src="{{asset('js/plugins/jquery.inview.min.js')}}"></script>
<script src="{{asset('js/plugins/pace.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/plugins/additional-methods.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoVKfEihX__NdMwdDysA6Vve6PE9Ierj4"></script>

<!-- Custom JavaScript -->
<script src="{{asset('js/hallooou.js')}}"></script>

<script src="{{ getenv('APP_ENV') === 'local' ? asset('tmp/js/main.js') : elixir('dist/js/main.min.js') }}"></script>
<!-- Finish scripts -->

</body>

</html>
