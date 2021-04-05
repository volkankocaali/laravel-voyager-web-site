<nav id="contact-menu" class="navigation navigation-hidden navigation-portrait">
    <div class="nav-menus-wrapper">
        <div class="header-info-item clearfix">
            <p class="header-info-title">İletişime Geç</p>
            <ul>
                <li><span class="ti-map-alt"></span> {{setting('site.address')}}</li>
                <li><span class="ti-mobile"></span> <a href="tel:{{setting('site.phone')}}">{{ setting('site.phone') }}</a></li>
                <li><span class="ti-email"></span> <a href="mailto:{{setting('site.mail')}}">{{setting('site.mail')}}</a></li>
            </ul>
        </div>
        <!--<div class="header-info-item clearfix">
            <p class="header-info-title">Work Time</p>
            <ul>
                <li><span class="ti-alarm-clock"></span> Working Days  9AM - 9PM</li>
                <li><span class="ti-alarm-clock"></span> Saturday  10AM - 8PM</li>
                <li><span class="ti-alarm-clock"></span> Sunday  Closed</li>
            </ul>
        </div>-->
        <div class="header-info-item clearfix">
            <p class="header-info-title">Bizi Takip Et</p>
            <ul class="header-social">
                <li><a href="{{setting('site.facebook')}}"><span class="ti-facebook"></span></a></li>
                <li><a href="{{setting('site.instagram')}}"><span class="ti-instagram"></span></a></li>
                <li><a href="{{setting('site.twitter')}}"><span class="ti-twitter"></span></a></li>
                <li><a href="{{setting('site.youtube')}}"><span class="ti-youtube"></span></a></li>
            </ul>
        </div>
    </div>
</nav>
