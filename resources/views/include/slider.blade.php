<div class="search-relative">

    <!-- slider -->
    <div class="owl-carousel" id="fullscreen-slider">
        @foreach($sliders as $item)
            @php
            $imageUrl = str_replace("\\","/",$item->image);
            @endphp
            <div class="item height100vh" style="background-image: url({{'storage/'.$imageUrl}});">
                <div class="page-head-wrap">
                    <div class="page-head-inner">
                        <div class="page-head-caption container text-center">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                        <h2 class="big-title mb-10 animate" data-animation="fadeInRight" data-timeout="800">{{$item->title}}</h2>
                                        <p class="animate mb-20" data-animation="fadeInLeft" data-timeout="800"> {{$item->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <!-- / slider -->


</div> <!-- / search-relative -->
