


@extends('layout.app')

@section('title') {{$data->name}} @endsection

@section('css') @endsection

@section('js') @endsection

@section('content')
    @php
        $imageUrl = str_replace("\\","/",json_decode($data->image)[0]);
    @endphp
    <div class="content mb-40 container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section section-padding" id="highlights">
                        <h2>{{$data->name}}</h2>
                        <hr>
                        <img src="{{asset('storage/'.$imageUrl)}}" alt="Image">
                        <p>
                            {{$data->content }}
                        </p>
                    </div>


                    <div class="section section-padding gallery" id="gallery">
                        <h2>Galeri</h2>
                        <hr>
                        <div class="row container-sm">

                            @foreach(json_decode($data->image) as $gallery)
                                <div class="col-md-4">
                                    <div class="image-grid-item">
                                        <a href="{{asset('storage/'.$gallery)}}" class="image-link">
                                            <img src="{{asset('storage/'.$gallery)}}" alt="{{$data->name}}">
                                        </a>
                                    </div>
                                </div>
                            @endforeach




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
