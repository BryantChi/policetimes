<?php

namespace App\Http\Controllers;

use App\Models\Admin\AdvertisementInfo;
use App\Models\Admin\LocalNewsInfo;
use App\Models\Admin\NewsInfo;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){
        $seoInfo = SeoSettingRepository::getInfo();
        $heroNewsInfos = NewsInfo::orderBy('created_at', 'desc')->limit(3)->get();
        $localNewsInfos = LocalNewsInfo::orderBy('created_at', 'desc')->limit(7)->get();
        $adInfos_l = AdvertisementInfo::where('advertisement_position', 'left')->where('advertisement_status', '1')->orderBy('created_at', 'desc')->limit(5)->get();
        $adInfos_r = AdvertisementInfo::where('advertisement_position', 'right')->where('advertisement_status', '1')->orderBy('created_at', 'desc')->limit(5)->get();
        return view('index')
            ->with('seoInfo', $seoInfo)
            ->with('heroNewsInfos', $heroNewsInfos)
            ->with('localNewsInfos', $localNewsInfos)
            ->with('adInfos_l', $adInfos_l)
            ->with('adInfos_r', $adInfos_r);
    }
}
