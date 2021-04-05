@extends('layout.app')

@section('title') İletişim @endsection

@section('css') @endsection

@section('js') @endsection

@section('content')
    <div class="content mt-60 mb-40 container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="mb-30">Adreslerimiz</h3>

                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info mb-30">
                            <h4>New York</h4>
                            <p><span class="ti-map-alt"></span>{{setting('site.address')}}</p>
                            <p><span class="ti-headphone-alt"></span> {{setting('site.phone')}}</p>
                            <p><span class="ti-email"></span><a href="mailto:{{setting('site.mail')}}">{{setting('site.mail')}}</a></p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <h3 class="mb-20">Sosyal Medya Adreslerimiz</h3>
                <div class="clearfix mb-40">
                    <ul class="contact-social">
                        @if(setting('site.facebook'))  <li><a href="{{setting('site.facebook')}}"><span class="ti-facebook"></span></a></li> @endif
                        @if(setting('site.instagram'))  <li><a href="{{setting('site.instagram')}}"><span class="ti-instagram"></span></a></li> @endif
                        @if(setting('site.twitter'))  <li><a href="{{setting('site.twitter')}}"><span class="ti-twitter"></span></a></li> @endif
                        @if(setting('site.youtube'))  <li><a href="{{setting('site.youtube')}}"><span class="ti-youtube"></span></a></li> @endif
                    </ul>
                </div>
                <div class="contact-mr">
                    <h3 class="mb-20">İletişim'e Geç</h3>

                    <form id="contact-form" class="mt-20 form-block" method="POST" action="{{route('home.contact.post')}}">
                        @csrf
                        <div class="form-row contact-form">
                            <div class="col-md-12">
                                <input type="email" class="form-control" name="email" placeholder="E-mail Adresi">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Konu">
                                @error('subject')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" placeholder="Mesaj"></textarea>
                                @error('message')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-auto mt-2">
                                <button type="submit" class="btn btn-1">Mesaj Gönder</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="map-wrap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d927.1148046257752!2d-73.99671282149218!3d40.72557916479356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2598f97b0aef9%3A0xc8c0fd4610df0ae0!2s610+Broadway%2C+New+York%2C+NY+10012%2C+USA!5e0!3m2!1sen!2sby!4v1526547027486" width="600" height="400" style="border:0" allowfullscreen></iframe>
    </div>
@endsection
