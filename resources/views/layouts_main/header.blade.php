<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar" role="banner">

        <div class="container">
            <div class="row align-items-start">

                <div class="col-11 col-lg-3 py-3">
                    <h1 class="mb-0 site-logo p-md-3"><a href="{{ route('index') }}" class="text-white mb-0"><img
                                src="{{ asset('assets/images/00-hp/top_logo.svg') }}" class="img-fluid2 logo-img" alt=""></a></h1>
                </div>
                <div class="col-12 col-xl-9 col-lg-8 d-none d-lg-block align-self-center">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li class=""><a href="{{ route('about') }}"><span>關於我們</span></a></li>
                            <li class=""><a href="{{ route('organization') }}"><span>組織架構</span></a></li>
                            <li class=""><a href="{{ route('news') }}"><span>最新警政新聞</span></a></li>
                            <li class=""><a href="{{ route('local-news') }}"><span>地方要聞</span></a></li>
                            <li class=""><a href="mailto:policetimesnews@yahoo.com.tw"
                                    target="_blank"><span>聯絡我們</span></a></li>
                            <li class="d-none d-lg-inline">
                                <a href="https://www.facebook.com/p/%E8%AD%A6%E5%A4%A7%E6%99%82%E5%A0%B1-100064559417626/"
                                    target="_blank">
                                    <img src="{{ asset('assets/images/00-hp/top_fb.png') }}" class="img-fluid" width="60" alt="">
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"
                    style="position: relative; top: 3px;right: 20px;">
                    <a href="#" class="site-menu-toggle js-menu-toggle text-dark"><span
                            class="icon-menu h3"></span></a>
                </div>

            </div>

        </div>

    </header>

</div>
