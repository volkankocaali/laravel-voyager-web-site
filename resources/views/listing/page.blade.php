@extends('layout.app')

@section('title') {{$data->title}} @endsection

@section('css') @endsection

@section('js') @endsection

@section('content')
    <div class="content mt-60 mb-40 container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="mb-20">{{ $data->title }}</h3>

                {!! $data->body !!}

            </div>
        </div>
    </div>

@endsection
