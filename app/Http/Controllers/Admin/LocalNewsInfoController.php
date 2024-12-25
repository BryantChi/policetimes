<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateLocalNewsInfoRequest;
use App\Http\Requests\Admin\UpdateLocalNewsInfoRequest;
use App\Repositories\Admin\LocalNewsInfoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LocalNewsInfoController extends AppBaseController
{
    /** @var LocalNewsInfoRepository $localNewsInfoRepository*/
    private $localNewsInfoRepository;

    public function __construct(LocalNewsInfoRepository $localNewsInfoRepo)
    {
        $this->localNewsInfoRepository = $localNewsInfoRepo;
    }

    /**
     * Display a listing of the LocalNewsInfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $localNewsInfos = $this->localNewsInfoRepository->paginate(10);

        return view('admin.local_news_infos.index')
            ->with('localNewsInfos', $localNewsInfos);
    }

    /**
     * Show the form for creating a new LocalNewsInfo.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.local_news_infos.create');
    }

    /**
     * Store a newly created LocalNewsInfo in storage.
     *
     * @param CreateLocalNewsInfoRequest $request
     *
     * @return Response
     */
    public function store(CreateLocalNewsInfoRequest $request)
    {
        $input = $request->all();

        $localNewsInfo = $this->localNewsInfoRepository->create($input);

        Flash::success('Local News Info saved successfully.');

        return redirect(route('admin.localNewsInfos.index'));
    }

    /**
     * Display the specified LocalNewsInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $localNewsInfo = $this->localNewsInfoRepository->find($id);

        if (empty($localNewsInfo)) {
            Flash::error('Local News Info not found');

            return redirect(route('admin.localNewsInfos.index'));
        }

        return view('admin.local_news_infos.show')->with('localNewsInfo', $localNewsInfo);
    }

    /**
     * Show the form for editing the specified LocalNewsInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $localNewsInfo = $this->localNewsInfoRepository->find($id);

        if (empty($localNewsInfo)) {
            Flash::error('Local News Info not found');

            return redirect(route('admin.localNewsInfos.index'));
        }

        return view('admin.local_news_infos.edit')->with('localNewsInfo', $localNewsInfo);
    }

    /**
     * Update the specified LocalNewsInfo in storage.
     *
     * @param int $id
     * @param UpdateLocalNewsInfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLocalNewsInfoRequest $request)
    {
        $localNewsInfo = $this->localNewsInfoRepository->find($id);

        if (empty($localNewsInfo)) {
            Flash::error('Local News Info not found');

            return redirect(route('admin.localNewsInfos.index'));
        }

        $localNewsInfo = $this->localNewsInfoRepository->update($request->all(), $id);

        Flash::success('Local News Info updated successfully.');

        return redirect(route('admin.localNewsInfos.index'));
    }

    /**
     * Remove the specified LocalNewsInfo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $localNewsInfo = $this->localNewsInfoRepository->find($id);

        if (empty($localNewsInfo)) {
            Flash::error('Local News Info not found');

            return redirect(route('admin.localNewsInfos.index'));
        }

        $this->localNewsInfoRepository->delete($id);

        Flash::success('Local News Info deleted successfully.');

        return redirect(route('admin.localNewsInfos.index'));
    }
}
