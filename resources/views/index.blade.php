@extends('layout.app')

@section('title') Ana Sayfa @endsection

@section('css') @endsection

@section('js') @endsection

@section('content')


    <!-- BLOCK popular -->

    <div class="main-block">
        <div class="container container-sm">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center block width100 mb-50 block-title">
                        <h2>Popular packages</h2>
                        <div class="separator"><span>Сhoose the tour yourself and get a 5% discount!</span></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="tour-item">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="img/distination-3.jpg" alt="">
                                <p class="price">1450 $</p>
                                <span class="badge">New</span>
                            </div>
                        </a>
                        <div class="caption">
                            <a href="#"><p class="title">Maldives Adventure Tour</p></a>
                            <p class="date"><span class="ti-calendar"></span>August 20, 2019</p>
                            <p class="time"><span class="ti-time"></span>10 days</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- BLOCK / popular -->

    <div class="ctoa text-center parallax-container color-white" style="background-image: url('img/image-2.jpg')">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-30">Get 15% Off on your first travel</h2>
                <p class="mb-40">Necessitatibus enim corrupti ullam voluptatum provident deserunt natus reprehenderit, inventore, tempore aut neque cupiditate, aspernatur! Quibusdam aliquid dolor a culpa, officiis quisquam.</p>
                <a class="btn btn-1" href="#">Contact Us</a>
            </div>
        </div>
    </div>

    <!-- BLOCK popular -->

    <div class="main-block">
        <div class="container container-sm">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center block width100 mb-50 block-title">
                        <h2>Popular Destinations</h2>
                        <div class="separator"><span>Сhoose the the most popular destinations</span></div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6 col-lg-4">
                    <div class="category-item effect-1">
                        <img src="img/distination-2.jpg" alt="img12">
                        <div class="caption">
                            <div>
                                <p class="title">Australia</p>
                                <p class="description">Plan your adventures in Australia with our tours</p>
                            </div>
                            <a href="#">View more</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="category-item effect-1">
                        <img src="img/distination-4.jpg" alt="img12">
                        <div class="caption">
                            <div>
                                <p class="title">Czech Republic</p>
                                <p class="description">Plan your adventures in Czech Republic with our tours</p>
                            </div>
                            <a href="#">View more</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="category-item effect-1">
                        <img src="img/distination-3.jpg" alt="img12">
                        <div class="caption">
                            <div>
                                <p class="title">Norway</p>
                                <p class="description">Plan your adventures in Norway with our tours</p>
                            </div>
                            <a href="#">View more</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="category-item effect-1">
                        <img src="img/distination-1.jpg" alt="img12">
                        <div class="caption">
                            <div>
                                <p class="title">UAE</p>
                                <p class="description">Sunrise shot of Downtown Dubai and Burj Khalifa</p>
                            </div>
                            <a href="#">View more</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="category-item effect-1">
                        <img src="img/distination-5.jpg" alt="img12">
                        <div class="caption">
                            <div>
                                <p class="title">Poland</p>
                                <p class="description">Plan your adventures in Poland with our tours</p>
                            </div>
                            <a href="#">View more</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="category-item effect-1">
                        <img src="img/distination-6.jpg" alt="img12">
                        <div class="caption">
                            <div>
                                <p class="title">France</p>
                                <p class="description">Plan your adventures in France with our tours</p>
                            </div>
                            <a href="#">View more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BLOCK / popular -->

    <!-- BLOCK advantage -->

    <div class="main-block bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center block width100 mb-30 block-title">
                        <h2>How we work?</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Infography item style 1 -->
                <div class="col-md-4">
                    <div class="infography infography-1">
                        <div class="infography-icon">
                            <i class="ti-headphone-alt"></i>
                        </div>
                        <div class="infography-text">
                            <h4>Call Us</h4>
                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure?</p>
                        </div>
                    </div>
                </div>
                <!-- / Infography item style 1 -->

                <!-- Infography item style 1 -->
                <div class="col-md-4">
                    <div class="infography infography-1">
                        <div class="infography-icon">
                            <i class="ti-car"></i>
                        </div>
                        <div class="infography-text">
                            <h4>Come to Us</h4>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
                        </div>
                    </div>
                </div>
                <!-- / Infography item style 1 -->

                <!-- Infography item style 1 -->
                <div class="col-md-4">
                    <div class="infography infography-1">
                        <div class="infography-icon">
                            <i class="ti-rocket"></i>
                        </div>
                        <div class="infography-text">
                            <h4>Fly to adventure</h4>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                </div>
                <!-- / Infography item style 1 -->
            </div>
        </div>
    </div>

    <!-- BLOCK / advantage -->

    <!-- BLOCK news -->

    <div class="main-block">
        <div class="container container-sm">

            <div class="row">
                <div class="col-md-12">
                    <div class="text-center block width100 mb-50 block-title">
                        <h2>Our Blog</h2>
                        <div class="separator"><span>Checkout latest news from our blog</span></div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6 col-lg-4">
                    <div class="blog-item effect-1">
                        <a class="block" href="#">
                            <img src="img/distination-2.jpg" alt="img12">
                        </a>
                        <div class="caption clearfix">
                            <a href="#">
                                <p class="title">The Best Travel Blog Ever</p>
                            </a>
                            <p class="date"><span class="ti-calendar"></span>August 20, 2018</p>
                            <p class="author"><span class="ti-user"></span>By TravelUser</p>
                            <ul class="tags">
                                <li><a href="#">Photos</a></li>
                                <li><a href="#">Trip</a></li>
                                <li><a href="#">Happy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-item effect-1">
                        <a class="block" href="#">
                            <img src="img/distination-3.jpg" alt="img12">
                        </a>
                        <div class="caption clearfix">
                            <a href="#">
                                <p class="title">The Best Travel Blog Ever</p>
                            </a>
                            <p class="date"><span class="ti-calendar"></span>August 20, 2018</p>
                            <p class="author"><span class="ti-user"></span>By TravelUser</p>
                            <ul class="tags">
                                <li><a href="#">Photos</a></li>
                                <li><a href="#">Trip</a></li>
                                <li><a href="#">Happy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-item effect-1">
                        <a class="block" href="#">
                            <img src="img/distination-5.jpg" alt="img12">
                        </a>
                        <div class="caption clearfix">
                            <a href="#">
                                <p class="title">The Best Travel Blog Ever</p>
                            </a>
                            <p class="date"><span class="ti-calendar"></span>August 20, 2018</p>
                            <p class="author"><span class="ti-user"></span>By TravelUser</p>
                            <ul class="tags">
                                <li><a href="#">Photos</a></li>
                                <li><a href="#">Trip</a></li>
                                <li><a href="#">Happy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- BLOCK / news -->

@endsection
