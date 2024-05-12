<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/khobor/khobor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Mar 2024 05:08:49 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    
    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
    <!-- ycp -->
    <link rel="stylesheet" href="{{asset('css/ycp.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <!-- Modernizer JS -->
    <script src="{{asset('js/vendor/modernizr-3.11.2.min.js')}}"></script>
</head>

<body>


  @include('header')
 

  @yield('content')

@include('footer') 

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{asset('js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('js/plugins.js')}}"></script>
<!-- ycp JS -->
<script src="{{asset('js/ycp.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('js/main.js')}}"></script>

</body>


<!-- Mirrored from htmldemo.net/khobor/khobor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Mar 2024 05:09:22 GMT -->
</html>  