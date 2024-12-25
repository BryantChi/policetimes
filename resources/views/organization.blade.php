@extends('layouts_main.master')

@section('content')
    <div class="main position-relative" id="main" style="overflow: hidden;">

        <!-- Organization Section -->
        <div class="container-xxl px-0 pt-lg-auto pt-5 position-relative">
            <div class="container-lg-fluid px-lg-5 px-3 mx-md-5">
                <div class="row organization mx-md-5" id="organization">
                    <div class="col-lg-9">
                        <div class="organization-title mt-1 mr-5">
                            <h3>組織架構</h3>
                            <p class="mb-0">Organization</p>
                        </div>
                        <div class="line-red"></div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="organization-content text-center">
                                    <picture>
                                        <source srcset="{{ asset('assets/images/02/02ban_480.jpg') }}" media="(max-width: 768px)">
                                        <source srcset="{{ asset('assets/images/02/02ban_1024.jpg') }}" media="(max-width: 1024px)">
                                        <source srcset="{{ asset('assets/images/02/02ban_1280.jpg') }}" media="(max-width: 1280px)">
                                        <img src="{{ asset('assets/images/02/02ban_1280.jpg') }}" alt="" class="img-fluid content-img">
                                    </picture>
                                    <img src="{{ asset('assets/images/02/02architecture.jpg') }}" class="img-fluid mt-3" style="width: 90%;"
                                        alt="">
                                </div>
                            </div>

                        </div>

                        <div class="row mt-3">
                            <div class="col-lg mb-3">
                                <div class="organization-sub-title">
                                    <h4>組織規章</h4>
                                </div>
                                <div class="organization-content">
                                    <p class="text-justify mb-0">
                                        一、『警大時報』是溝通警民之間聯絡事宜。<br>
                                        二、協助警察解決民眾糾紛及非訴訟案件。<br>
                                        三、基於博愛精神，切實配合社會工作人員、維護社區警民橋樑，讓人民能安居樂業。<br>
                                        四、發掘當地警察人員有功績者予以報導。<br>
                                        五、每年會不定時開會，如果限制各縣市辦事處，有社長策劃與當地的主任、督察一起討論如何辦理。<br>
                                        六、有重要大會議，我們會統一由總社發佈事宜。<br>
                                        七、遵照總社組織架構職權上不可越級。<br>
                                        八、其他如有未盡事項隨時修正之。
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-auto mb-3">
                                <div class="organization-sub-title">
                                    <h4>經濟部智慧財產局</h4>
                                </div>
                                <div class="organization-content">
                                    <p class="text-justify mb-0">
                                        章註冊號數：0 0 1 4 3 7 8 5 號<br>
                                        正標章號數：0 0 1 4 1 9 8 6 號<br>
                                        營利登記證：0 8 8 4 5 2 7 號<br>
                                        商業工會證：8 6 1 號
                                    </p>
                                </div>
                            </div>

                        </div>



                    </div>
                    <div class="col-lg-3">
                        @foreach ($adInfos as $ad)
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
