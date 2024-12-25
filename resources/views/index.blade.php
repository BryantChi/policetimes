@extends('layouts_main.master')

@section('content')
    <div class="main-section position-relative" style="overflow: hidden;">

        <!-- About Section -->
        <div class="container-xxl p-0 position-relative about-bg">
            <div class="container">
                <div class="row about-section" id="about">
                    <div class="col-lg-7 d-block d-md-flex">
                        <div class="about-title mt-1 mr-5">
                            <h3>關於警大</h3>
                            <p>About</p>
                        </div>
                        <div class="about-content">
                            <p>
                                前社長林國樣教授，曾經於中央警官學校授課，當時發現許多民眾不了解警察的辛苦，只知道警察依法持續公共秩序、保障社會安全。<br>
                                前社長林國樣教授深知，員警的風紀是警察工作成敗的重要命脈，優良的風氣才是赢得社會支持的認可。<br>
                                因此前社長林國樣教授於79年2月中旬，與前署長姚高橋、副署署長余玉堂，向行政院新聞局申請創立剛開始創辦為警牧時報，79年3月底4月初核准。<br>
                                由於當時警牧時報由主筆鄭石鎚教授及林國樣教授，因為中央警官學校，改名之後於民國84年左右改警大時報名稱。<br>
                                自成立以来都是報導警察好人好事，初期為黑白印刷，89年3月10日改為彩色印刷，91年由於當時的經濟發展及網路的變遷，所以開始有網路始終如一報導員警好人好事為宗旨。
                            </p>
                            <div class="d-flex">
                                <a href="{{ route('about') }}" class="btn-about-us mr-1">關於我們 ⭢</a>
                                <a href="{{ route('organization') }}" class="btn-organization ml-1">組織架構 ⭢</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Local News Section -->
        <div class="container-xxl p-0 position-relative local-news-bg">
            <div class="container">
                <div class="row g-0 local-news" id="local-news">
                    <div class="col-lg-3 px-lg-3">
                        {{-- <img src="{{ asset('assets/images/00-hp/ad_p_l.jpg') }}" class="img-fluid local-news-imgs" alt=""> --}}
                        @foreach ($adInfos_l as $ad)
                            <a href="{{ $ad->advertisement_link }}" target="_blank">
                                <img src="{{ env('APP_URL', 'https://policetimes.com.tw') . '/uploads/' . $ad->advertisement_img }}" class="img-fluid local-news-imgs2 mb-2" alt="">
                            </a>
                        @endforeach
                    </div>
                    <div class="col-lg-6 px-lg-0">
                        <div class="local-news-content">

                            <div class="local-news-header d-block d-lg-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="local-news-title mt-1">
                                        <h3>地方要聞</h3>
                                        <p class="mb-0">Local News</p>
                                    </div>
                                    <div class="local-news-more ml-auto d-block d-lg-none">
                                        <a href="{{ route('local-news') }}">
                                            <div
                                                class="btn-outline-more-bluedark d-flex justify-content-center align-items-center">
                                                <span class="mr-2">MORE</span>
                                                <img src="{{asset('assets/images/00-hp/m_arrow.png')}}" class="img-fluid" width="20px"
                                                    alt="">
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="local-news-line"></div>
                                <div class="local-new-sub-txt">
                                    <p class="mb-0">
                                        警大時報為活動進行全方位的報導，<br>
                                        讓讀者即時了解活動的精彩內容及重要資訊。
                                    </p>
                                </div>
                                <div class="local-news-more ml-auto d-none d-lg-block">
                                    <a href="{{ route('local-news') }}">
                                        <div
                                            class="btn-outline-more-bluedark d-flex justify-content-center align-items-center">
                                            <span class="mr-2">MORE</span>
                                            <img src="{{asset('assets/images/00-hp/m_arrow.png')}}" class="img-fluid" width="20px"
                                                alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="local-news-body">
                                @foreach ($localNewsInfos as $localNews)
                                <div class="local-news-item d-flex justify-content-between align-items-center">
                                    <a href="{{ route('local-news.detail', [$localNews->id]) }}">
                                        <div class="local-news-item-title d-flex align-items-center">
                                            <span class="text-danger">•</span>
                                            <p class="mb-0 single-ellipsis">{{ $localNews->title }}</p>
                                        </div>
                                    </a>
                                    <div class="local-news-item-date">{{ \Carbon\Carbon::parse($localNews->release_date)->format('Y/m/d') }}</div>
                                </div>
                                @endforeach


                            </div>

                            <div class="local-news-footer mt-3 local-news-footer-img">
                                <picture>
                                    <source srcset="{{asset('assets/images/00-hp/contact_ban_1024.jpg')}}" media="(max-width: 1024px)">
                                    <source srcset="{{asset('assets/images/00-hp/contact_ban_1280.jpg')}}" media="(max-width: 1280px)">
                                    <img src="{{asset('assets/images/00-hp/contact_ban_624.jpg')}}" alt="Contact Banner" class="img-fluid">
                                </picture>
                            </div>

                            <div
                                class="local-news-footer mt-2 local-news-footer-contact d-lg-flex d-block align-items-center">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="local-news-title mt-1">
                                        <h3>聯絡我們</h3>
                                        <p class="mb-0">Contact</p>
                                    </div>
                                    <a href="mailto:policetimesnews@yahoo.com.tw" target="_blank">
                                        <img src="{{asset('assets/images/00-hp/email.png')}}" class="img-fluid d-block d-lg-none"
                                            width="100px" alt="">
                                    </a>
                                </div>
                                <div class="local-news-contact-line"></div>
                                <div class="local-news-footer-contact-info d-flex align-items-center">
                                    <p class="mb-0">
                                        感謝您對《警大時報》的關注與支持！您的意見與建議對我們非常重要。<br>
                                        若您有任何問題、建議或需要進一步了解相關資訊，請隨時與我們聯繫。
                                    </p>
                                    <a href="mailto:policetimesnews@yahoo.com.tw" target="_blank">
                                        <img src="{{asset('assets/images/00-hp/email.png')}}" class="img-fluid d-none d-lg-block"
                                            alt="">
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 px-lg-3">
                        {{-- <img src="{{ asset('assets/images/00-hp/ad_p_r.jpg') }}" class="img-fluid local-news-imgs" alt=""> --}}
                        @foreach ($adInfos_r as $ad)
                            <a href="{{ $ad->advertisement_link }}" target="_blank">
                                <img src="{{ env('APP_URL', 'https://policetimes.com.tw') . '/uploads/' . $ad->advertisement_img }}" class="img-fluid local-news-imgs2 mb-2" alt="">
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
