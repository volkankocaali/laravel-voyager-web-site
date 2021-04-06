


@extends('layout.app')

@section('title') {{$data->name}} @endsection

@section('css') @endsection

@section('js') @endsection

@section('content')
    <div class="content mb-40 container">
        <div class="row container-sm mt-5">
            @if($tours->count() > 0)
                @foreach($blog as $index => $item)
                    <div class="col-md-6 col-lg-4">
                        <div class="tour-item">
                            <a href="{{route('home.blog',$item->slug)}}">
                                <div class="img-wrap">

                                    <img src="{{asset('storage/'.$item->image)}}" alt="{{$item->title}}">


                                    <p class="price">{{$index + 1}}</p>
                                </div>
                            </a>
                            <div class="caption">
                                <a href="#"><p class="title">{{$item->title}}</p></a>
                                <a href="{{route('home.blog',$item->slug)}}" class="mt-2 btn btn-1 width100">Devamını Gör</a>
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

@endsection
