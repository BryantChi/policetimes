<?php

namespace App\Http\Controllers;

use App\Models\Admin\AdvertisementInfo;
use App\Models\Admin\LocalNewsInfo;
use App\Models\Admin\NewsInfo;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class LocalNewsController extends Controller
{
    //
    public function index()
    {
        $seoInfo = SeoSettingRepository::getInfo('/local-news');
        $heroNewsInfos = NewsInfo::orderBy('created_at', 'desc')->limit(3)->get();
        $localNewsInfos = LocalNewsInfo::orderBy('created_at', 'desc')->paginate(10);
        $adInfos = AdvertisementInfo::orderBy('created_at', 'desc')->limit(5)->get();
        return view('local-news')
            ->with('seoInfo', $seoInfo)
            ->with('heroNewsInfos', $heroNewsInfos)
            ->with('localNewsInfos', $localNewsInfos)
            ->with('adInfos', $adInfos);
    }

    public function detail($id)
    {
        $seoInfo = SeoSettingRepository::getInfo('/local-news');
        $heroNewsInfos = NewsInfo::orderBy('created_at', 'desc')->limit(3)->get();
        $localNewsInfo = LocalNewsInfo::find($id);
        $adInfos = AdvertisementInfo::orderBy('created_at', 'desc')->limit(5)->get();
        return view('local-news-inner')
            ->with('seoInfo', $seoInfo)
            ->with('heroNewsInfos', $heroNewsInfos)
            ->with('localNewsInfo', $localNewsInfo)
            ->with('adInfos', $adInfos);
    }
}
