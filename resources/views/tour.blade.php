


@extends('layout.app')

@section('title') {{$data->name}} @endsection

@section('css') @endsection

@section('js') @endsection

@section('content')
    <div class="content mb-40 container">
        <div class="row container-sm mt-5">
            @if($tours->count() > 0)
                @foreach($tours as $index => $item)
                    <div class="col-md-6 col-lg-4">
                        <div class="tour-item">
                            <a href="{{route('home.tour',$item->slug)}}">
                                <div class="img-wrap">
                                    @foreach(json_decode($item->image) as $key => $image)
                                        @if($key == 0)
                                            <img src="{{asset('storage/'.$image)}}" alt="{{$item->name}}">
                                        @endif
                                    @endforeach

                                    <p class="price">{{$index + 1}}</p>
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

@endsection
