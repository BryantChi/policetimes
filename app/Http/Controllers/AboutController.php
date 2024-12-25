<?php

namespace App\Http\Controllers;

use App\Models\Admin\AdvertisementInfo;
use App\Models\Admin\NewsInfo;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index(){
        $seoInfo = SeoSettingRepository::getInfo('/about');
        $heroNewsInfos = NewsInfo::orderBy('created_at', 'desc')->limit(3)->get();
        $adInfos = AdvertisementInfo::orderBy('created_at', 'desc')->limit(5)->get();
        return view('about')
            ->with('seoInfo', $seoInfo)
            ->with('heroNewsInfos', $heroNewsInfos)
            ->with('adInfos', $adInfos);
    }
}
