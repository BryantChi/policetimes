<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateSeoSettingRequest;
use App\Http\Requests\Admin\UpdateSeoSettingRequest;
use App\Repositories\Admin\SeoSettingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SeoSettingController extends AppBaseController
{
    /** @var SeoSettingRepository $seoSettingRepository*/
    private $seoSettingRepository;

/*************  ✨ Codeium Command ⭐  *************/
    /**
     * Create a new controller instance.
     *
     * @param SeoSettingRepository $seoSettingRepo
     */
/******  d056104a-7c0f-45e4-b6e7-47a586d0f0c3  *******/
    public function __construct(SeoSettingRepository $seoSettingRepo)
    {
        $this->seoSettingRepository = $seoSettingRepo;
    }

    /**
     * Display a listing of the SeoSetting.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $seoSettings = $this->seoSettingRepository->paginate(10);

        return view('admin.seo_settings.index')
            ->with('seoSettings', $seoSettings);
    }

    /**
     * Show the form for creating a new SeoSetting.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.seo_settings.create');
    }

    /**
     * Store a newly created SeoSetting in storage.
     *
     * @param CreateSeoSettingRequest $request
     *
     * @return Response
     */
    public function store(CreateSeoSettingRequest $request)
    {
        $input = $request->all();

        $seoSetting = $this->seoSettingRepository->create($input);

        Flash::success('Seo Setting saved successfully.');

        return redirect(route('admin.seoSettings.index'));
    }

    /**
     * Display the specified SeoSetting.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $seoSetting = $this->seoSettingRepository->find($id);

        if (empty($seoSetting)) {
            Flash::error('Seo Setting not found');

            return redirect(route('admin.seoSettings.index'));
        }

        return view('admin.seo_settings.show')->with('seoSetting', $seoSetting);
    }

    /**
     * Show the form for editing the specified SeoSetting.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $seoSetting = $this->seoSettingRepository->find($id);

        if (empty($seoSetting)) {
            Flash::error('Seo Setting not found');

            return redirect(route('admin.seoSettings.index'));
        }

        return view('admin.seo_settings.edit')->with('seoSetting', $seoSetting);
    }

    /**
     * Update the specified SeoSetting in storage.
     *
     * @param int $id
     * @param UpdateSeoSettingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSeoSettingRequest $request)
    {
        $seoSetting = $this->seoSettingRepository->find($id);

        if (empty($seoSetting)) {
            Flash::error('Seo Setting not found');

            return redirect(route('admin.seoSettings.index'));
        }

        $seoSetting = $this->seoSettingRepository->update($request->all(), $id);

        Flash::success('Seo Setting updated successfully.');

        return redirect(route('admin.seoSettings.index'));
    }

    /**
     * Remove the specified SeoSetting from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $seoSetting = $this->seoSettingRepository->find($id);

        if (empty($seoSetting)) {
            Flash::error('Seo Setting not found');

            return redirect(route('admin.seoSettings.index'));
        }

        $this->seoSettingRepository->delete($id);

        Flash::success('Seo Setting deleted successfully.');

        return redirect(route('admin.seoSettings.index'));
    }
}
