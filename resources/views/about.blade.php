@extends('layouts_main.master')

@section('content')
    <div class="main position-relative" id="main" style="overflow: hidden;">

        <!-- About Section -->
        <div class="container-xxl px-0 pt-lg-auto pt-5 position-relative">
            <div class="container-lg-fluid px-lg-5 px-3 mx-md-5">
                <div class="row about mx-md-5" id="about">
                    <div class="col-lg-9">
                        <div class="about-title mt-1 mr-5">
                            <h3>關於警大時報</h3>
                            <p class="mb-0">About</p>
                        </div>
                        <div class="line-red"></div>
                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <div class="about-content">
                                    <p>
                                        一、【警大時報】溝通警民之間聯絡事宜。<br>
                                        二、協助警察解決民眾糾紛及非訴訟案件。<br>
                                        三、基於博愛精神，切實配合社會工作人員、維護社區警民橋梁。<br>
                                        四、接洽"警察"、"行政區域"、"里辦事處"各單位，做好社交良好關係。<br>
                                        五、對於警政有功人員或績優人員作專欄表揚，藉此激勵士氣。
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about-content">
                                    <picture>
                                        <source srcset="{{ asset('assets/images/01/01pic1_312.jpg') }}" media="(max-width: 768px)">
                                        <img src="{{ asset('assets/images/01/01pic1_624.jpg') }}" alt=""
                                            class="img-fluid about-content-img">
                                    </picture>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="about-sub-title">
                                    <h4>成立目的</h4>
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="about-content">
                                    <p class="text-justify mb-0">
                                        警大時報前身為警牧時報，於民國7
                                        9年當時發行人於中央警官學校於當時任教警官學校的教授，當時許多民眾都不太瞭解警察的生活，警察人員常常奮不顧身的去救人或捉壞人，他們也非常的辛苦，因為他們有時候晚上要值班，而且每當過年節慶的時候都很難與家人團聚，所以當時很多人都以為警察人員只有捉壞人的工作，很多民眾看到警察都不想與警察互動，因此發行人和警官們合辦成立警牧時報，經由行政院新聞局審查通過於台北市成立，林國樑教授表示：相信警牧時報一定可以做得更好，為所有警察人士寫下美好的記錄。
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="row">
                                    <div class="col-xl-4 mb-3 about-pic-2 mx-md-auto mx-2">
                                        <!-- <img src="images/01/01pic2.jpg" class="img-fluid" alt=""> -->
                                    </div>
                                    <div class="col-xl mb-3">
                                        <div class="about-content">
                                            <p class="text-justify mb-0">
                                                以警察機關來講，組織也非常龐大及績密，但就觀察，警察機關是一個非典型的結構，它呈現一個不規則塔的格局。<br>
                                                但從警察機關來說所有的決策、計畫及執行呈現不平衡的狀態。<br>
                                                舉例來說上層常交付不可能的任務，如同市場不接受你的商品一樣。一班勤務須達到某個數目的舉發、一個月須達到故定百分比，如查緝毒品、外勞、
                                                大陸偷渡客、色情、赌博、查尋人口、竊盜等等，種類繁多，只要其中大項評核績效太差，就得面臨懲處的結果。就基層員警來說常常背負各項績效壓力，還要擔服數不盡的勤務，值班受理民眾報案及長官督勤；巡邏要把巡邏表巡簽完畢，並線上處理各種事故；但往往你得在作完上述的工作後，用自己下班或睡眠時間來完成，如果遇到可以溝通的主管還可以改班讓你有時間
                                                完成，如果遇到「完美主義」的主官，你可真的是啞巴吃黃蓮。
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="about-content">
                                            <p class="text-justify mb-0">
                                                警察的業務包山包海，其實根本不用特別提高見警率，那只是一種文字的遊戲，讓我們少一點非必要性勤業務，見警率自然提高，何況見警率提高不等於犯罪率降低。那些長官只想到治標不治本的方法，還得意洋洋的讚賞自己精心的傑作，這家公司不會倒嗎？<br>
                                                人們常說：「教育乃百年大計」。警察的養成教育，養出一批又一批只會當官，卻不會做事的人，這一點有憑有據，信而有徵。<br>
                                                許多民眾都開始對警察又所改變，現今看到警察的為民服務的精神，都受民眾一致的肯定。從警牧時報一直改制變大時報，時間過程困境。警牧時報從黑白印刷，十多年來專門報導警察事蹟，於八十九年三月十日升格改為警大時報，九十二年從黑白印刷改彩色印刷，而警大時報的宗旨始終如一，報導員警的好人好事，替警界發聲。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="about-sub-title">
                                    <h4>前社長：林國樑教授（時任發行人）</h4>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="about-content">
                                    <p class="text-justify">
                                        曾任教中央警官學校，看到許多民眾都不瞭解警察為民服務的辛勞，只知道警察都是依法維持公共秩序，保護社會安全，防止一切危害，促進人民福利，前社長：林國樑（時任發行人）知道員警風紀良窳是維繫警察工作成敗之最重要命脈，沒有優良風紀再好的績效也難獲得社會大眾對警察的支持與認同。<br>
                                        故此，於民國七十九年二月中旬前社長：林國樑（時任發行人）與前署長姚高橋、前副署長余玉堂及一些警官向行政院新聞局申請，七十九年三月十日獲准成立警牧時報，警牧時報成立時，深獲許多警官讚同與支持。<br>
                                        警大時報黑白印刷，十多年來專門報導警察事蹟，於八十九年三月十日改版，警大時報彩色印刷，從印刷到網路資訊開始，一步一腳印勿忘初衷，都在報導警察好人好事。<br>
                                        現任社長林
                                        韋表示，警察好勇敢，常常奮不顧身的去救人或是抓壞人，因為他們有時候晚上值班不眠不休的為民服務，尤其每當逢年過節都犧牲與家人團聚，所以非常敬佩員警們的辛勞。相信警大時報一定可以做得更好，為所有警界人士發到並寫下美好的記錄，讓更多人認識、了解警察的辛苦！
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3 about-sub-section mx-md-auto mx-1">
                            <div class="col-lg-5 px-0">
                                <picture>
                                    <source srcset="{{ asset('assets/images/01/01pic3_312.jpg')}}" media="(max-width: 768px)">
                                    <img src="{{ asset('assets/images/01/01pic3_624.jpg')}}" alt="" class="img-fluid about-content-img">
                                </picture>
                            </div>
                            <div class="col-lg-7 px-lg-5 px-3 pt-3 d-flex align-items-center">
                                <div class="content">
                                    <div class="about-sub-title">
                                        <h4>採訪宗旨</h4>
                                    </div>
                                    <div class="about-content">
                                        <p class="text-justify">
                                            一、檢舉犯罪事實公諸於報及反應有關單位，讓不法人員繩之於法。<br>
                                            二、對於警政有功人員或績優人員作專欄表揚，藉此激勵士氣。<br>
                                            三、以公正、客觀、真實、平衡來評論人、地、事、物共同監督社會反應政府，達到輿論制衡的力量來端正社會風氣。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        {{-- <img src="images/00-hp/ad_p_r.jpg" class="img-fluid local-news-imgs" alt=""> --}}
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
