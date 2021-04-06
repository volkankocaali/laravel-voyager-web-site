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
                        <h2>Favori Seferler</h2>
                        <!-- <div class="separator"><span>Сhoose the tour yourself and get a 5% discount!</span></div>-->
                    </div>
                </div>
            </div>

            <div class="row">
                @if($tours->count() > 0)
                    @foreach($tours->take(6) as $key => $item)
                        <div class="col-md-6 col-lg-4">
                            <div class="tour-item">
                                <a href="#">
                                    <div class="img-wrap">
                                        @foreach(json_decode($item->image) as $key => $image)
                                            @if($key == 0)
                                                <img src="{{asset('storage/'.$image)}}" alt="{{$item->name}}">
                                            @endif
                                        @endforeach

                                        <p class="price">{{$key+1}}</p>
                                    </div>
                                </a>
                                <div class="caption">
                                    <a href="#"><p class="title">{{$item->name}}</p></a>
                                    <a href="{{route('home.tour',$item->slug)}}" class="mt-2 btn btn-1 width100">Sefere Git</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="container">
                        <div class="col-12 alert alert-danger">Mevcut sefer bulunamadı.</div>
                    </div>
                @endif

            </div>
        </div>

    </div>


    <!-- BLOCK / popular -->

    <div class="ctoa text-center parallax-container color-white" style="background-image: url('img/image-2.jpg')">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!--<h2 class="mb-30">Get 15% Off on your first travel</h2>
                <p class="mb-40">Necessitatibus enim corrupti ullam voluptatum provident deserunt natus reprehenderit, inventore, tempore aut neque cupiditate, aspernatur! Quibusdam aliquid dolor a culpa, officiis quisquam.</p>
                -->
                <a class="btn btn-1" href="{{route('home.contact')}}">İletişime Geç</a>
            </div>
        </div>
    </div>


    <!-- BLOCK news -->

    <div class="main-block">
        <div class="container container-sm">

            <div class="row">
                <div class="col-md-12">
                    <div class="text-center block width100 mb-50 block-title">
                        <h2>Blog</h2>
                        <div class="separator"><span>Blogumuzdan en son haberleri inceleyin</span></div>
                    </div>
                </div>
            </div>

            <div class="row">
                @if($tours->count() > 0)
                    @foreach($blog->take(6) as $key => $item)
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-item effect-1">
                                <a class="block" href="{{route('home.blog',$item->slug)}}">
                                    <img src="{{asset('storage/'.$item->image)}}" alt="{{$item->title}}">
                                </a>
                                <div class="caption clearfix">
                                    <a href="{{route('home.blog',$item->slug)}}">
                                        <p class="title">{{$item->title}}</p>
                                    </a>
                                    <p class="date"><span class="ti-calendar"></span> {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</p>

                                    <ul class="tags">
                                        @foreach(explode(",",$item->meta_keywords) as $item)
                                            <li><a href="">{{$item}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                    @endforeach
                @else
                    <div class="container">
                        <div class="col-12 alert alert-danger">Mevcut blog yazısı bulunamadı.</div>
                    </div>
                @endif






            </div>
        </div>
    </div>

    <!-- BLOCK / news -->

@endsection
