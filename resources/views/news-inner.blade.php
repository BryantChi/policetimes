@extends('layouts_main.master')

@section('content')
    <div class="main position-relative" id="main" style="overflow: hidden;">

        <!-- News Inner Section -->
        <div class="container-xxl px-0 pt-lg-auto pt-5 position-relative">
            <div class="container-lg-fluid px-lg-5 px-3 mx-md-5">
                <div class="row news mx-md-5" id="news">
                    <div class="col-lg-9">
                        <div class="news-title mt-1 mr-5">
                            <h3>最新警政新聞</h3>
                            <p class="mb-0">News</p>
                        </div>
                        <div class="line-red"></div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="news-content text-center">
                                    <picture>
                                        <source srcset="{{ asset('assets/images/03/03ban_480.jpg') }}"
                                            media="(max-width: 768px)">
                                        <source srcset="{{ asset('assets/images/03/03ban_1024.jpg') }}"
                                            media="(max-width: 1024px)">
                                        <source srcset="{{ asset('assets/images/03/03ban_1280.jpg') }}"
                                            media="(max-width: 1280px)">
                                        <img src="{{ asset('assets/images/03/03ban_1280.jpg') }}" alt=""
                                            class="img-fluid content-img">
                                    </picture>
                                </div>
                            </div>

                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="news-inner-title d-flex align-items-center">
                                    <span class="text-danger">•</span>
                                    <h4>{{ $newsInfo->title }}</h4>
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="news-inner-content">
                                    <p class="news-inner-date">
                                        發布日期：{{ \Carbon\Carbon::parse($newsInfo->release_date)->format('Y-m-d') }}</p>

                                    {!! $newsInfo->content !!}

                                </div>
                            </div>

                            <div class="col-12 mt-3 text-center">
                                <a href="{{ route('news') }}" class="btn-outline-back-list">⭠ 返回列表</a>
                            </div>

                        </div>



                    </div>
                    <div class="col-lg-3">
                        @foreach ($adInfos as $ad)
                            <a href="{{ $ad->advertisement_link }}" target="_blank">
                                <img src="{{ env('APP_URL', 'https://policetimes.com.tw') . '/uploads/' . $ad->advertisement_img }}"
                                    class="img-fluid local-news-imgs2 mb-2" alt="">
                            </a>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
