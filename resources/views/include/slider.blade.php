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

    <!-- order form -->

    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <!-- filter horizontal form -->
                    <form class="order-form filter-form filter-form-slider animate" data-animation="fadeInUp" data-timeout="1000" method="POST">
                        <div class="form-row">

                            <div class="form-group col-md-2">
                                <select class="form-control custom-select">
                                    <option>I want to</option>
                                    <option>UAE</option>
                                    <option>Germany</option>
                                    <option>USA</option>
                                    <option>Spain</option>
                                    <option>France</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2 p-relative">
                                <input type="text" class="form-control" id="daterangepicker" name="date" value="" placeholder="Departure Date">
                            </div>
                            <div class="form-group col-md-2">
                                <select class="form-control custom-select">
                                    <option selected>Guest(s)</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>

                            <div class="form-group col-md-2 slider-margin">
                                <div class="slider-text">
                                    <span class="text-left">Duration (days)</span>
                                    <span class="float-right slider-date" id="duration-2">30</span>
                                    <span class="float-right separator">-</span>
                                    <span class="slider-date float-right" id="duration-1">1</span>
                                </div>
                                <input id="duration-input" type="text" name="duration" data-slider-min="1" data-slider-max="30" data-slider-step="1" data-slider-value="[1,30]"/>
                            </div>

                            <div class="form-group col-md-2 slider-margin">
                                <div class="slider-text">
                                    <span class="slider-title">Price $</span>
                                    <span class="float-right slider-date" id="budget-2">5000</span>
                                    <span class="float-right separator">-</span>
                                    <span id="budget-1" class="slider-date float-right">200</span>
                                </div>
                                <input id="budget-input" type="text" name="price" data-slider-min="200" data-slider-max="5000" data-slider-step="100" data-slider-value="[200,5000]"/>
                            </div>

                            <div class="form-group col-md-2">
                                <button type="submit" name="search_btn" class="btn btn-1 width100">Find</button>
                            </div>

                        </div>
                    </form>
                    <!-- / filter horizontal form -->
                </div>
            </div>
        </div>
    </div>

    <!-- / order form -->

</div> <!-- / search-relative -->
