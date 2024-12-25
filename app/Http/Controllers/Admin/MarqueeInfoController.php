<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateMarqueeInfoRequest;
use App\Http\Requests\Admin\UpdateMarqueeInfoRequest;
use App\Repositories\Admin\MarqueeInfoRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Admin\MarqueeInfo;
use Illuminate\Http\Request;
use Flash;
use Response;

class MarqueeInfoController extends AppBaseController
{
    /** @var MarqueeInfoRepository $marqueeInfoRepository*/
    private $marqueeInfoRepository;

    public function __construct(MarqueeInfoRepository $marqueeInfoRepo)
    {
        $this->marqueeInfoRepository = $marqueeInfoRepo;
    }

    /**
     * Display a listing of the MarqueeInfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $marqueeInfos = $this->marqueeInfoRepository->paginate(10);

        return view('admin.marquee_infos.index')
            ->with('marqueeInfos', $marqueeInfos);
    }

    /**
     * Show the form for creating a new MarqueeInfo.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.marquee_infos.create');
    }

    /**
     * Store a newly created MarqueeInfo in storage.
     *
     * @param CreateMarqueeInfoRequest $request
     *
     * @return Response
     */
    public function store(CreateMarqueeInfoRequest $request)
    {
        $input = $request->all();

        $marqueeInfo = $this->marqueeInfoRepository->create($input);

        if ($input['used'] == 1) {
            MarqueeInfo::where('id', '!=', $marqueeInfo->id)->update(['used' => 0]);
        }

        Flash::success('Marquee Info saved successfully.');

        return redirect(route('admin.marqueeInfos.index'));
    }

    /**
     * Display the specified MarqueeInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $marqueeInfo = $this->marqueeInfoRepository->find($id);

        if (empty($marqueeInfo)) {
            Flash::error('Marquee Info not found');

            return redirect(route('admin.marqueeInfos.index'));
        }

        return view('admin.marquee_infos.show')->with('marqueeInfo', $marqueeInfo);
    }

    /**
     * Show the form for editing the specified MarqueeInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $marqueeInfo = $this->marqueeInfoRepository->find($id);

        if (empty($marqueeInfo)) {
            Flash::error('Marquee Info not found');

            return redirect(route('admin.marqueeInfos.index'));
        }

        return view('admin.marquee_infos.edit')->with('marqueeInfo', $marqueeInfo);
    }

    /**
     * Update the specified MarqueeInfo in storage.
     *
     * @param int $id
     * @param UpdateMarqueeInfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMarqueeInfoRequest $request)
    {
        $marqueeInfo = $this->marqueeInfoRepository->find($id);

        if (empty($marqueeInfo)) {
            Flash::error('Marquee Info not found');

            return redirect(route('admin.marqueeInfos.index'));
        }
        $input = $request->all();
        $marqueeInfo = $this->marqueeInfoRepository->update($input, $id);

        if ($input['used'] == 1) {
            MarqueeInfo::where('id', '!=', $id)->update(['used' => 0]);
        }

        Flash::success('Marquee Info updated successfully.');

        return redirect(route('admin.marqueeInfos.index'));
    }

    /**
     * Remove the specified MarqueeInfo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $marqueeInfo = $this->marqueeInfoRepository->find($id);

        if (empty($marqueeInfo)) {
            Flash::error('Marquee Info not found');

            return redirect(route('admin.marqueeInfos.index'));
        }

        $this->marqueeInfoRepository->delete($id);

        if ($marqueeInfo->used == 1) {
            MarqueeInfo::orderBy('id', 'asc')->first()->update(['used' => 1]);
        }

        Flash::success('Marquee Info deleted successfully.');

        return redirect(route('admin.marqueeInfos.index'));
    }
}
