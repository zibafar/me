<!DOCTYPE html>
<html lang="fa">
<head>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Sadjad Zibafar" />
        <meta name="keywords" content="Zibafar" />
        <meta name="author" content="Sadjad Zibafar" />

        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content="Sadjad Zibafar"/>
        <meta property="og:image" content="zibafar"/>
        <meta property="og:url" content="zibafar.me"/>
        <meta property="og:site_name" content="zibafar"/>
        <meta property="og:description" content="zibafar"/>
        <meta name="twitter:title" content="szibafar" />
        <meta name="twitter:image" content="zibafar" />
        <meta name="twitter:url" content="zibafar" />
        <meta name="twitter:card" content="zibafar" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="{{asset('/')}}/favicon.ico">

        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

        <!-- Animate.css -->
        <link rel="stylesheet" href="{{asset('/')}}css/animate.css">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="{{asset('/')}}css/icomoon.css">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
        <!-- Flexslider  -->
        <link rel="stylesheet" href="{{asset('/')}}css/flexslider.css">
        <!-- Flaticons  -->
        <link rel="stylesheet" href="{{asset('/')}}/fonts/flaticon/font/flaticon.css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{asset('/')}}/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{asset('/')}}/css/owl.theme.default.min.css">
        <!-- Theme style  -->
        <link rel="stylesheet" href="{{asset('/')}}/css/style.css">

        <!-- Modernizr JS -->
        <script src="{{asset('/')}}/js/modernizr-2.6.2.min.js"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="{{asset('/')}}/js/respond.min.js"></script>
        <![endif]-->
        @yield('css')
        <title>@yield('title', 'Sadjad Zibafar')</title>
    </head>





<body>
@include('includes.header')

<div id="colorlib-page">
    @include('includes.menu')
    @yield('content')
</div>
@include('includes.footer')
@yield('js')
</body>
</html>