<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>

    <link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic'
          rel='stylesheet' type='text/css'>

    <link href="{{ asset('public/assets/front/css/style.css') }}" rel='stylesheet' type='text/css'/>

</head>

<meta name="robots" content="noindex">

<body>
<div class="h-top" id="home">
    <div class="top-header">
        <ul class="cl-effect-16 top-nag">
            <li><a href="about.html" data-hover="About">About</a></li>
            <li><a href="services.html" data-hover="SERVICES">SERVICES</a></li>
            <li><a href="{{ route('register.store') }}" data-hover="Registration">Registration</a></li>
            <li><a href="{{ route('login.create') }}" data-hover="Login">Login</a></li>
            <li><a href="contact.html" data-hover="CONTACT">Contact</a></li>
            <li><a href="#" data-hover="CATEGORIES">Categories</a></li>
        </ul>
        <div class="search-box">
            <div class="b-search">
                <form>
                    <input type="text" value="Search" onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="">
                </form>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
{{--<div class="full"></div>--}}
<div class="col-md-3 top-nav">
    <div class="logo">
        <a href="{{ route('home') }}"><h1>Blogger</h1></a>
    </div>
    <div class="top-menu">
        <span class="menu"> </span>

        <ul class="cl-effect-16">
            <li><a class="active" href="index.html" data-hover="HOME">Home</a></li>
            <li><a href="about.html" data-hover="About">About</a></li>
            <li><a href="grid.html" data-hover="Grids">Grids</a></li>
            <li><a href="services.html" data-hover="Services">Services</a></li>
            <li><a href="gallery.html" data-hover="Gallery">Gallery</a></li>
            <li><a href="contact.html" data-hover="CONTACT">Contact</a></li>
        </ul>

        <ul class="side-icons">
            <li><a class="fb" href="#"></a></li>
            <li><a class="twitt" href="#"></a></li>
            <li><a class="goog" href="#"></a></li>
            <li><a class="drib" href="#"></a></li>
        </ul>
    </div>
</div>
<div class="col-md-9 main">
    @yield('content')

    @include('layouts.rightbar')
</div>

<div class="col-md-3 main">
    @include('layouts.footer')
</div>

<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover"
                                                                         style="opacity: 1;"> </span></a>


<script type="text/javascript" src="{{ asset('public/assets/front/js/scripts.js') }}"></script>

</body>
</html>
