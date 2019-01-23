<!DOCTYPE html>
<html lang="en">
<head>

    @include('includes.meta')
    @include('includes.styles')
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{asset('/favicon.ico')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('/js/modernizr-2.6.2.min.js')}}"></script>

    <!-- FOR IE9 below -->
        <script src="{{asset('/js/respond.min.js')}}"></script>
    <!--[if lt IE 9]>

    <![endif]-->
    @yield('css')
    <title>@yield('title', 'Sadjad Zibafar')</title>
</head>


<body>
@include('includes.header')

<div id="colorlib-page">
    @yield('content')
</div><!-- end:colorlib-page -->

@include('includes.footer')
@yield('js')
</body>
</html>