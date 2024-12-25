<?php

namespace App\Http\Controllers;

use App\Models\Admin\AdvertisementInfo;
use App\Models\Admin\NewsInfo;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    //
    public function index(){
        $seoInfo = SeoSettingRepository::getInfo('/organization');
        $heroNewsInfos = NewsInfo::orderBy('created_at', 'desc')->limit(3)->get();
        $adInfos = AdvertisementInfo::orderBy('created_at', 'desc')->limit(5)->get();
        return view('organization')
            ->with('seoInfo', $seoInfo)
            ->with('heroNewsInfos', $heroNewsInfos)
            ->with('adInfos', $adInfos);
    }
}
