<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
    <title>Laravel ACL</title>
    <link href="https://fonts.googleapis.com/css?family=Questrial|Raleway:700,900" rel="stylesheet">

    <link href="{{ asset('public/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/bootstrap.extension.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/style.css')}}" rel="stylesheet" type="text/css" />
    <!-- <link href="{{ asset('public/css/swiper.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/sumoselect.css')}}" rel="stylesheet" type="text/css" /> -->
    <link href="{{ asset('public/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
@include('partials.header')
<div class="main">
    @yield('content')
</div>
@include('partials.footer')
<script src="{{ asset('public/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{ asset('public/js/swiper.jquery.min.js')}}"></script>
<script src="{{ asset('public/js/global.js')}}"></script>

<!-- styled select -->
<script src="{{ asset('public/js/jquery.sumoselect.min.js')}}"></script>

<!-- counter -->
<script src="{{ asset('public/js/jquery.classycountdown.js')}}"></script>
<script src="{{ asset('public/js/jquery.knob.js')}}"></script>
<script src="{{ asset('public/js/jquery.throttle.js')}}"></script>
</body>
</html>