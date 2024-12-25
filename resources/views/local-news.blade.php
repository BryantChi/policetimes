@extends('layouts_main.master')

@section('content')
    <div class="main position-relative" id="main" style="overflow: hidden;">

        <!-- Local News Section -->
        <div class="container-xxl px-0 pt-lg-auto pt-5 position-relative">
            <div class="container-lg-fluid px-lg-5 px-3 mx-md-5">
                <div class="row news mx-md-5" id="news">
                    <div class="col-lg-9">
                        <div class="local-news-title mt-1 mr-5">
                            <h3>地方要聞</h3>
                            <p class="mb-0">Local News</p>
                        </div>
                        <div class="line-red"></div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="local-news-content text-center">
                                    <picture>
                                        <source srcset="{{ asset('assets/images/04/04ban_480.jpg') }}" media="(max-width: 768px)">
                                        <source srcset="{{ asset('assets/images/04/04ban_1024.jpg') }}" media="(max-width: 1024px)">
                                        <source srcset="{{ asset('assets/images/04/04ban_1280.jpg') }}" media="(max-width: 1280px)">
                                        <img src="{{ asset('assets/images/04/04ban_1280.jpg') }}" alt="" class="img-fluid content-img">
                                    </picture>
                                </div>
                            </div>

                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="local-news-body">
                                    @foreach ($localNewsInfos as $localNews)
                                    <div class="local-news-item d-flex justify-content-between align-items-center">
                                        <a href="{{ route('local-news.detail', [$localNews->id]) }}">
                                            <div class="local-news-item-title d-flex align-items-center">
                                                <span class="text-danger">•</span>
                                                <p class="mb-0 single-ellipsis">{{ $localNews->title }}</p>
                                            </div>
                                        </a>
                                        <div class="local-news-item-date">{{ $localNews->release_date }}</div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>

                        </div>

                        <div class="overflow-auto mb-3">
                            {{ $localNewsInfos->onEachSide(3)->links('layouts_main.custom-pagination') }}
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
