<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('img/favicon.ico')}}">

    <title>@yield('title') - {{ setting('site.title') }} </title>



    @yield('css')
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/vendor/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/vendor/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor/viewbox.css')}}" rel="stylesheet">
    <link href="{{ asset('css/vendor/bootstrap-slider.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor/daterangepicker.min.css') }}" rel="stylesheet">

    <script src="{{ asset('js/vendor/fontawesome-all.min.js') }}"></script>

    <link href="{{ asset('css/scss/main.css') }}" rel="stylesheet">

    <link href="{{ asset('css/scss/schemes.css') }}" rel="stylesheet">

    <link href="{{ asset('setting/settings.css') }}" rel="stylesheet">

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', '{{setting('site.google_analytics_tracking_id')}}', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body>

@include('include.loader')
@include('include.navbar')
@include('include.header')
@if(Route::currentRouteName() == "home.index")
    @include('include.slider')
@elseif(Route::currentRouteName() == "home.contact")
    @include('include.contact-bread')
@elseif(Route::currentRouteName() == "home.tour")
    @php
        $imageUrl = str_replace("\\","/",json_decode($data->image)[0]);
    @endphp
    <div class="page-head white-content">
        <div class="height60vh parallax-container" style="background-image: url({{asset('storage/'.$imageUrl)}});">
            <div class="page-head-wrap">
                <div class="display-r">
                    <div class="display-a">
                        <div class="container">
                            <div class="row justify-content-center animate" data-animation="fadeInUp" data-timeout="500">
                                <div class="col-md-12">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{route('home.index')}}">Ana Sayfa</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><a href="{{route('home.all.tour')}}">Seferler</a></li>
                                        </ol>
                                    </nav>
                                    <h1 class="big-title mt-60">@yield('title')</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@else
    @include('include.page-bread')
@endif



@yield('content')


<footer class="dark-footer"  style="background-image: url('img/image-20.jpg');">
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-item">
                        <img width="110" src="{{asset('storage/'.setting('site.logo'))}}" alt="Logo">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-item">
                        <ul class="footer-menu">
                            <li><a href="{{route('home.index')}}">Ana Sayfa</a></li>
                            @foreach($categories as $item)
                                <li><a href="{{route('home.category',$item->slug)}}">{{$item->name}}</a></li>
                            @endforeach
                            <li><a href="{{route('home.contact')}}">İletişim</a></li>
                        </ul>
                        <p class="mt-30">{{setting('site.footer')}}</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-item">
                        <ul class="mb-20">
                            <li>{{setting('site.phone')}}</li>
                            <li class="mt-10"><a href="mailto:{{setting('site.mail')}}">{{setting('site.mail')}}</a></li>
                            <li class="mt-10">{{setting('site.address')}}</li>
                        </ul>

                    </div>

                    <div class="footer-item">
                        <ul class="footer-social mt-20">
                            @if(setting('site.facebook'))  <li><a target="_blank"  href="{{setting('site.facebook')}}"><span class="fab fa-facebook"></span></a></li> @endif
                            @if(setting('site.instagram'))  <li><a target="_blank"  href="{{setting('site.instagram')}}"><span class="fab fa-twitter"></span></a></li> @endif
                            @if(setting('site.twitter'))  <li><a target="_blank"  href="{{setting('site.twitter')}}"><span class="fab fa-instagram"></span></a></li> @endif
                            @if(setting('site.youtube'))  <li><a target="_blank"  href="{{setting('site.youtube')}}"><span class="fab fa-youtube"></span></a></li> @endif
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>@ {{config('app.name')}}</p>
                </div>
                <!--<div class="col-md-6 text-r mobile-left">
                    <p><img width="200" src="{{asset('img/visa-mastercard-paypal.png')}}" alt="Visa Mastercard Paypal"></p>
                </div> -->
            </div>
        </div>
    </div>
</footer>

<!-- SCROLL UP -->
<a class="scrollup">
    <i class="ti-angle-up"></i>
</a>
<!-- / SCROLL UP -->

<!-- COOKIE MESSAGE -->
<div id="cookie-message" class="alert alert-fixed text-center animate" role="alert" data-animation="fadeInUp" data-timeout="500">
    <button type="button" id="cookie-btn" class="close" data-dismiss="alert" aria-label="Close"><i class="ti-close"></i></button>
    Sitemizde sunulan özelliklerin ve sitenin işleyişi için bazı çerezlerin kullanılması teknik olarak zorunludur. Diğer bazı çerezler de sitemizi geliştirmek ve bizim tarafımızdan veya yetkili hizmet sağlayıcılarımız tarafından size ilgi alanınıza göre reklamların sunulması amacıyla kullanılmaktadır. Detaylı bilgi için Gizlilik Politikası ve Çerez Politikasını inceleyebilirsiniz.
</div>
<!-- / COOKIE MESSAGE -->


<!-- JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('js/vendor/moment.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap-slider.min.js') }}"></script>
<script src="{{asset('js/vendor/cookies.js')}}"></script>
<script src="{{ asset('js/vendor/jquery.daterangepicker.min.js') }}"></script>
<script src="{{ asset('js/vendor/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/vendor/navigation.js') }}"></script>
<script src="{{ asset('js/vendor/modernizr.js') }}"></script>
<script src="{{asset('js/vendor/jqueryvalidation.js')}}"></script>
<script src="{{ asset('js/vendor/jquery.viewbox.min.js') }}"></script>
<script src="{{ asset('js/vendor/masonry.min.js') }}"></script>
<script src="{{ asset('js/vendor/imagesloaded.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.sticky-kit.min.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>

<script src="{{ asset('setting/jscolor.js') }}"></script>
<script src="{{ asset('setting/settings.js') }}"></script>

<script type="application/javascript">
    $(document).ready(function(){
        if (sessionStorage.getItem('cerez') != 1) {
            $("#cookie-message").css("display","block");
        }

        $("#cookie-btn").click(function() {
            sessionStorage.setItem('cerez', 0);
            $("#cookie-message").css("display","none");
        });
        $("#cookie-message").click(function() {
            sessionStorage.setItem('cerez', 1);
            $("#cookie-message").css("display","block");
        });
    });
</script>
@yield('js')
</body>

</html>
