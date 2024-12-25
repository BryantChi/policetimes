<!-- Hero News -->
<div class="block-quick-info-2">
    <div class="container px-lg-5 px-2">
        <div class="block-quick-info-2-inner p-0 hero-news mx-lg-5 mx-3">
            <div class="news-mask"></div>
            <div class="row">
                <div class="col-lg hero-news-list">
                    <div class="row justify-content-center">
                        <div class="col-lg-auto d-lg-block d-flex justify-content-between align-self-center">
                            <div>
                                <h5 class="mb-0">最新警政新聞</h5>
                                <p class="mb-2">News</p>
                            </div>
                            <a href="{{ route('news') }}">
                                <div class="btn-outline-more d-flex justify-content-center align-items-center">
                                    <span class="mr-2">MORE</span>
                                    <img src="{{ asset('assets/images/00-hp/m_arrow.png') }}" class="img-fluid" width="20px" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-auto">
                            <div class="hero-news-line"></div>
                        </div>
                        <div class="col-lg mt-3">
                            <ul class="pl-1 align-items-center list-unstyled hero-news-list-content">
                                @foreach ($heroNewsInfos as $news)
                                <li class="w-100 d-flex justify-content-between">
                                    <a href="{{ route('news.detail', [$news->id]) }}">
                                        <div class="d-flex align-items-center">
                                            <span class="text-danger">•</span>
                                            <p class="mb-0 multiline-ellipsis-2">{{ $news->title }}</p>
                                        </div>
                                    </a>
                                    <span class="ml-3 " style="white-space:nowrap;">{{ \Carbon\Carbon::parse($news->release_date)->format('Y-m-d') }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-lg-auto hero-news-slogn d-flex justify-content-center align-items-center">
                    <div>
                        <h5 class="text-with-line">警大時報</h5>
                        <h4>報導員警好人好事，<br class="d-block d-lg-none">替警界發聲</h4>
                        <h5>成為警察最有力的後盾。</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
