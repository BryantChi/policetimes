<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateNewsInfoRequest;
use App\Http\Requests\Admin\UpdateNewsInfoRequest;
use App\Repositories\Admin\NewsInfoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class NewsInfoController extends AppBaseController
{
    /** @var NewsInfoRepository $newsInfoRepository*/
    private $newsInfoRepository;

    public function __construct(NewsInfoRepository $newsInfoRepo)
    {
        $this->newsInfoRepository = $newsInfoRepo;
    }

    /**
     * Display a listing of the NewsInfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $newsInfos = $this->newsInfoRepository->paginate(10);

        return view('admin.news_infos.index')
            ->with('newsInfos', $newsInfos);
    }

    /**
     * Show the form for creating a new NewsInfo.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.news_infos.create');
    }

    /**
     * Store a newly created NewsInfo in storage.
     *
     * @param CreateNewsInfoRequest $request
     *
     * @return Response
     */
    public function store(CreateNewsInfoRequest $request)
    {
        $input = $request->all();

        $newsInfo = $this->newsInfoRepository->create($input);

        Flash::success('News Info saved successfully.');

        return redirect(route('admin.newsInfos.index'));
    }

    /**
     * Display the specified NewsInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $newsInfo = $this->newsInfoRepository->find($id);

        if (empty($newsInfo)) {
            Flash::error('News Info not found');

            return redirect(route('admin.newsInfos.index'));
        }

        return view('admin.news_infos.show')->with('newsInfo', $newsInfo);
    }

    /**
     * Show the form for editing the specified NewsInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $newsInfo = $this->newsInfoRepository->find($id);

        if (empty($newsInfo)) {
            Flash::error('News Info not found');

            return redirect(route('admin.newsInfos.index'));
        }

        return view('admin.news_infos.edit')->with('newsInfo', $newsInfo);
    }

    /**
     * Update the specified NewsInfo in storage.
     *
     * @param int $id
     * @param UpdateNewsInfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNewsInfoRequest $request)
    {
        $newsInfo = $this->newsInfoRepository->find($id);

        if (empty($newsInfo)) {
            Flash::error('News Info not found');

            return redirect(route('admin.newsInfos.index'));
        }

        $newsInfo = $this->newsInfoRepository->update($request->all(), $id);

        Flash::success('News Info updated successfully.');

        return redirect(route('admin.newsInfos.index'));
    }

    /**
     * Remove the specified NewsInfo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $newsInfo = $this->newsInfoRepository->find($id);

        if (empty($newsInfo)) {
            Flash::error('News Info not found');

            return redirect(route('admin.newsInfos.index'));
        }

        $this->newsInfoRepository->delete($id);

        Flash::success('News Info deleted successfully.');

        return redirect(route('admin.newsInfos.index'));
    }
}
