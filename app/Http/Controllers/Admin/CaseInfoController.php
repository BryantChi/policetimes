<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateCaseInfoRequest;
use App\Http\Requests\Admin\UpdateCaseInfoRequest;
use App\Repositories\Admin\CaseInfoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CaseInfoController extends AppBaseController
{
    /** @var CaseInfoRepository $caseInfoRepository*/
    private $caseInfoRepository;

    public function __construct(CaseInfoRepository $caseInfoRepo)
    {
        $this->caseInfoRepository = $caseInfoRepo;
    }

    /**
     * Display a listing of the CaseInfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $caseInfos = $this->caseInfoRepository->paginate(10);

        return view('admin.case_infos.index')
            ->with('caseInfos', $caseInfos);
    }

    /**
     * Show the form for creating a new CaseInfo.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.case_infos.create');
    }

    /**
     * Store a newly created CaseInfo in storage.
     *
     * @param CreateCaseInfoRequest $request
     *
     * @return Response
     */
    public function store(CreateCaseInfoRequest $request)
    {
        $input = $request->all();

        $caseInfo = $this->caseInfoRepository->create($input);

        Flash::success('Case Info saved successfully.');

        return redirect(route('admin.caseInfos.index'));
    }

    /**
     * Display the specified CaseInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $caseInfo = $this->caseInfoRepository->find($id);

        if (empty($caseInfo)) {
            Flash::error('Case Info not found');

            return redirect(route('admin.caseInfos.index'));
        }

        return view('admin.case_infos.show')->with('caseInfo', $caseInfo);
    }

    /**
     * Show the form for editing the specified CaseInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $caseInfo = $this->caseInfoRepository->find($id);

        if (empty($caseInfo)) {
            Flash::error('Case Info not found');

            return redirect(route('admin.caseInfos.index'));
        }

        return view('admin.case_infos.edit')->with('caseInfo', $caseInfo);
    }

    /**
     * Update the specified CaseInfo in storage.
     *
     * @param int $id
     * @param UpdateCaseInfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCaseInfoRequest $request)
    {
        $caseInfo = $this->caseInfoRepository->find($id);

        if (empty($caseInfo)) {
            Flash::error('Case Info not found');

            return redirect(route('admin.caseInfos.index'));
        }

        $caseInfo = $this->caseInfoRepository->update($request->all(), $id);

        Flash::success('Case Info updated successfully.');

        return redirect(route('admin.caseInfos.index'));
    }

    /**
     * Remove the specified CaseInfo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $caseInfo = $this->caseInfoRepository->find($id);

        if (empty($caseInfo)) {
            Flash::error('Case Info not found');

            return redirect(route('admin.caseInfos.index'));
        }

        $this->caseInfoRepository->delete($id);

        Flash::success('Case Info deleted successfully.');

        return redirect(route('admin.caseInfos.index'));
    }
}
