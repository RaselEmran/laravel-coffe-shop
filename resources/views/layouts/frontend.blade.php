
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Coffee Caps - Get cheap quality coffee capsules from the Coffee Boy</title>
    @stack('css_before')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" >
    <!--font-fontawesome-->
    <link rel="stylesheet" href="{{ asset('frontend/css/all.css') }}" >
    <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri&display=swap" rel="stylesheet">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" ></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" ></script>
    <!--    slick slider-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/slick/slick-theme.css')}}">
        <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
    <!--    custom css-->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    @stack('css_after')
</head>
<body class="bg-color">
<nav class="navbar navbar-expand-lg p-0 d-none d-lg-block" style="background-image: url({{ asset('frontend/img/menu-background.png') }});">
    <div class="container-fluid">
        <div class="row w-100">
            <div class="col-lg-6 col-md-6 my-auto">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">
                                <button type="button" class="btn btn-outline-light">SING IN</button>
                            </a>
                        </li>
                        <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
                            <a class="nav-link is_relative" href="{{ url('/') }}"> Home</a>
                        </li>
                        <li class="nav-item {{Request::is('behov') ? 'active' : ''}}">
                            <a class="nav-link is_relative" href="{{ route('behov') }}">So easy is the </a>
                        </li>
                        <li class="nav-item {{Request::is('coffee') ? 'active' : ''}}">
                            <a class="nav-link is_relative" href="{{ route('coffee') }}">Coffee </a>
                        </li>
                        <li class="nav-item {{Request::is('about') ? 'active' : ''}}">
                            <a class="nav-link is_relative" href="{{ route('about') }}">About Us </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 text-center my-auto">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- <!-- <img src="img/logo.svg" alt="" width="100%"> -->
                </a>
            </div>
            <div class="col-lg-4  col-md-4 my-auto">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item pr-0">
                            <a class="nav-link pr-0" href="{{ route('bestill') }}"><button type="button" class="btn btn-dark font-weight-bold py-3 pt-0d">TRY NOW</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<!--     dasktop nav end -->
<!--   mobile nav start -->
<div class="container-fluid d-block d-lg-none">
    <div class="row py-2 mobi-nav">
        <div class="col-4">
            <a class="btn " data-toggle="collapse" href="#M-nav" role="button" aria-expanded="false" aria-controls="M-nav">
                <i class="fas fa-bars"></i>
                <i class="fas fa-times"></i>
            </a>
        </div>
        <div class="col-4">
            <!-- <img src="img/logo.svg" alt="" width="100%"> -->
        </div>
        <div class="col-4 text-right">
            <a class="pr-0" href="{{ route('bestill') }}"><button type="button" class="btn btn-dark font-weight-bold py-2">TRY NOW</button></a>
        </div>
    </div>
    <div class="row bg-dark  py-5 collapse" id="M-nav">
        <div class="col-12 text-center">
            <p> <a class="font-weight-bold text-white" href="{{ route('behov') }}"> So easy is the </a> </p>
        </div>
        <div class="col-12 text-center">
            <p> <a class="font-weight-bold text-white" href="{{ route('coffee') }}"> Coffee </a></p>
        </div>
        <div class="col-12 text-center">
            <p> <a class="font-weight-bold text-white" href="{{ route('about') }}"> About Us </a></p>
        </div>
        <div class="col-6">
            <a class="nav-link" href="{{ route('login') }}">
                <button type="button" class="btn btn-outline-light">SING IN</button>
            </a>
        </div>
{{--        <div class="col-6 text-right">--}}
{{--            <a class="nav-link text-white" href="#"><i class="fas fa-shopping-cart"></i></a>--}}
{{--        </div>--}}
    </div>
</div>
<!-- navbar end -->
<!-- navbar end -->


<!--  sing in area start -->


@section('content')
    @show

<!--  sing in area end -->

<!--    fotter top start -->
<section class="fottter-top py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <!-- <img class="mb-5" src="img/logo-grey.svg" alt="" width="20%">
                <br> -->
                <div class="row">
                    <div class="col-md-4 col-12 my-2">
                        <a href="cookies.html"> Handelsbetingelser</a>
                    </div>
                    <div class="col-md-4 col-12 my-2">
                        <a href="cookies.html"> Privatpolitik </a>
                    </div>

                    <div class="col-md-4 col-12 my-2">
                        <a href="cookies.html"> Cookies </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--    fotter top end -->
<!--    fotter bottom start -->
<section class="fotter-bottom py-3">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 col-12 my-auto d-none d-sm-block">
                <p> coffeecoffee ApS - CVR 40516492</p>
            </div>
            <div class="col-md-4 ">
                <img src="{{ asset('frontend/img/icon-footer-fb.svg') }}" alt="">
                <img src="{{ asset('frontend/img/icon-footer-ig.svg') }}" alt="">
                <img src="{{ asset('frontend/img/icon-footer-yt.svg') }}" alt="">
                <img src="{{ asset('frontend/img/icon-footer-li.svg') }}" alt="">
            </div>
            <div class="col-md-4 col-12 my-auto d-block d-sm-none  pt-5">
                <p> coffeecoffee ApS- CVR 40516492</p>
            </div>
            <div class="col-md-4 my-auto">
                <p>Copyright 2019 &copy; coffeecoffee ApS </p>
            </div>
        </div>
    </div>
</section>
<!--    fotter bottom end -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('frontend/js/jquery-3.3.1.slim.min.js') }}" ></script>
<script src="{{ asset('frontend/js/jquery-2.2.0.min.js') }}" ></script>
<script src="{{ asset('frontend/js/popper.min.js') }}" ></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}" ></script>
<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover({
            placement: 'top',
            trigger: 'hover'
        });
    });
</script>
<!--    slick slider -->
<script src="{{ asset('frontend/slick/slick.min.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
<script src="{{ asset('frontend/js/slick-custom.js') }}" type="text/javascript"> </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
@stack('js')
</body>
</html>
