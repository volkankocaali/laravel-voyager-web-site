<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{$settings[1]->value}}">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>@yield('title') - {{$settings[0]->value}} </title>



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

        ga('create', '{{$settings[3]->value}}', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body>

@include('include.loader')
@include('include.navbar')
@include('include.header')
@include('include.slider')


@yield('content')


<footer class="dark-footer"  style="background-image: url(img/image-20.jpg);">
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-item">
                        <img width="110" src="img/logo-white.png" alt="Logo">
                        <div class="mt-20 mb-20">
                            <button type="button" class="btn btn-1 btn-sm" data-toggle="modal" data-target="#newsletterModal">
                                Newsletter signup
                            </button>
                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-sm" id="newsletterModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel">Newsletter Signup</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="subscribe-form" class="form-block" novalidate="novalidate">
                                                <div class="form-group mt-20 subscribe-form">
                                                    <small id="emailHelp" class="form-text text-muted">Subscribe now and recieve a 50% discount on your next tour booking</small>
                                                    <label>Email address</label>
                                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                                </div>
                                                <div class="mt-10 mb-10 float-right">
                                                    <button type="button" class="btn btn-2 btn-sm" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-1 btn-sm">Sign Up</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-item">
                        <ul class="footer-menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Catalog</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        <p class="mt-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, aperiam consequuntur excepturi ab maiores reiciendis quo corporis maxime hic pariatur rerum deleniti deserunt aliquid modi, aliquam delectus veniam debitis molestiae.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-item">
                        <ul class="mb-20">
                            <li>1800-2345-5677</li>
                            <li class="mt-10"><a href="mailto:">info@voyagetime.com</a></li>
                            <li class="mt-10">610 Broadway New York, NY 10012</li>
                        </ul>

                    </div>

                    <div class="footer-item">
                        <ul class="footer-social mt-20">
                            <li><a target="_blank" href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fab fa-tumblr"></i></a></li>
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
                    <p>@ 2018 VoyageTime</p>
                </div>
                <div class="col-md-6 text-r mobile-left">
                    <p><img width="200" src="img/visa-mastercard-paypal.png" alt="Visa Mastercard Paypal"></p>
                </div>
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
    <button type="button" id="cookie-btn" class="close" data-dismiss="alert" aria-label="Close"><i class="ti-close"></i></button>We use cookies to ensure that we give you the best experience on our website. If you continue to use this site we will assume that you are happy with it.
</div>
<!-- / COOKIE MESSAGE -->


<!-- JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/moment.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/vendor/bootstrap-slider.min.js"></script>
<script src="js/vendor/cookies.js"></script>
<script src="js/vendor/jquery.daterangepicker.min.js"></script>
<script src="js/vendor/owl.carousel.min.js"></script>
<script src="js/vendor/navigation.js"></script>
<script src="js/vendor/modernizr.js"></script>
<script src="js/vendor/jqueryvalidation.js"></script>
<script src="js/vendor/jquery.viewbox.min.js"></script>
<script src="js/vendor/masonry.min.js"></script>
<script src="js/vendor/imagesloaded.js"></script>
<script src="js/vendor/jquery.waypoints.min.js"></script>
<script src="js/vendor/jquery.sticky-kit.min.js"></script>

<script src="js/main.js"></script>

<script src="setting/jscolor.js"></script>
<script src="setting/settings.js"></script>

@yield('js')
</body>

<!-- Mirrored from abshar.by/VoyageTime/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Mar 2021 19:40:49 GMT -->
</html>
