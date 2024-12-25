<?php

namespace App\Http\Controllers;

use App\Models\Admin\AdvertisementInfo;
use App\Models\Admin\NewsInfo;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index()
    {
        $seoInfo = SeoSettingRepository::getInfo('/news');
        $heroNewsInfos = NewsInfo::orderBy('created_at', 'desc')->limit(3)->get();
        $newsInfos = NewsInfo::orderBy('created_at', 'desc')->paginate(10);
        $adInfos = AdvertisementInfo::orderBy('created_at', 'desc')->limit(5)->get();
        return view('news')
            ->with('seoInfo', $seoInfo)
            ->with('heroNewsInfos', $heroNewsInfos)
            ->with('newsInfos', $newsInfos)
            ->with('adInfos', $adInfos);
    }

    public function detail($id)
    {
        $seoInfo = SeoSettingRepository::getInfo('/news');
        $heroNewsInfos = NewsInfo::orderBy('created_at', 'desc')->limit(3)->get();
        $newsInfo = NewsInfo::find($id);
        $adInfos = AdvertisementInfo::orderBy('created_at', 'desc')->limit(5)->get();
        return view('news-inner')
            ->with('seoInfo', $seoInfo)
            ->with('heroNewsInfos', $heroNewsInfos)
            ->with('newsInfo', $newsInfo)
            ->with('adInfos', $adInfos);
    }
}
