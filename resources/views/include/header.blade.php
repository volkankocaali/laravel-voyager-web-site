<header>
    <div class="main-header header-bg-0">
        <div class="header-width container-fluid">
            <div class="row">
                <div class="col-md-4 col-4">
                    <div class="main-header-logo">
                        <a href="{{route('home.index')}}"><img width="130" src="{{asset('storage/'.$settings[2]->value)}}" alt="{{$settings[0]->value}} Logo"></a>
                    </div>
                </div>
                <div class="col-md-8 col-8">
                    <div class="right-header">
                        <div class="clearfix float-right contact-head">
                            <a href="tel:1800-2345-5677">1800-2345-5677</a>
                            <button class="btn-show navbar-toggler float-right btn-contact"><span class="ti-menu"></span></button>
                        </div>
                        <nav id="navigation" class="navigation mt-10">
                            <div class="nav-toggle">Menu</div>
                            <div class="nav-search">
                                <div class="nav-search-button">
                                    <span class="ti-search"></span>
                                </div>
                                <form>
                                    <div class="nav-search-inner">
                                        <input type="search" name="search" placeholder="Type and hit ENTER"/>
                                    </div>
                                </form>
                            </div>

                            <div class="nav-menus-wrapper">
                                <ul class="nav-menu align-to-right">
                                    <li><a href="{{route('home.index')}}">Ana Sayfa</a></li>
                                    @foreach($categories as $item)
                                        <li><a class="" href="{{route('home.category',$item->slug)}}">{{$item->name}}</a>
                                            @if($item->pages->count() > 0)
                                                <ul class="nav-dropdown">
                                                    @foreach($item->pages as $page)
                                                        <li><a href="{{route('home.page',[$item->slug,$page->slug])}}">{{ $page->title }}</a></li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach

                                    <li><a href="{{route('home.contact')}}">İletişim</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
