<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateAdvertisementInfoRequest;
use App\Http\Requests\Admin\UpdateAdvertisementInfoRequest;
use App\Repositories\Admin\AdvertisementInfoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Response;

class AdvertisementInfoController extends AppBaseController
{
    /** @var AdvertisementInfoRepository $advertisementInfoRepository*/
    private $advertisementInfoRepository;

    public function __construct(AdvertisementInfoRepository $advertisementInfoRepo)
    {
        $this->advertisementInfoRepository = $advertisementInfoRepo;
    }

    /**
     * Display a listing of the AdvertisementInfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $advertisementInfos = $this->advertisementInfoRepository->paginate(10);

        return view('admin.advertisement_infos.index')
            ->with('advertisementInfos', $advertisementInfos);
    }

    /**
     * Show the form for creating a new AdvertisementInfo.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.advertisement_infos.create');
    }

    /**
     * Store a newly created AdvertisementInfo in storage.
     *
     * @param CreateAdvertisementInfoRequest $request
     *
     * @return Response
     */
    public function store(CreateAdvertisementInfoRequest $request)
    {
        $input = $request->all();

        $input['advertisement_img'] = $this->processImage($request->file('advertisement_img'), 'advertisement_img');

        $advertisementInfo = $this->advertisementInfoRepository->create($input);

        Flash::success('Advertisement Info saved successfully.');

        return redirect(route('admin.advertisementInfos.index'));
    }

    /**
     * Display the specified AdvertisementInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $advertisementInfo = $this->advertisementInfoRepository->find($id);

        if (empty($advertisementInfo)) {
            Flash::error('Advertisement Info not found');

            return redirect(route('admin.advertisementInfos.index'));
        }

        return view('admin.advertisement_infos.show')->with('advertisementInfo', $advertisementInfo);
    }

    /**
     * Show the form for editing the specified AdvertisementInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $advertisementInfo = $this->advertisementInfoRepository->find($id);

        if (empty($advertisementInfo)) {
            Flash::error('Advertisement Info not found');

            return redirect(route('admin.advertisementInfos.index'));
        }

        return view('admin.advertisement_infos.edit')->with('advertisementInfo', $advertisementInfo);
    }

    /**
     * Update the specified AdvertisementInfo in storage.
     *
     * @param int $id
     * @param UpdateAdvertisementInfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdvertisementInfoRequest $request)
    {
        $advertisementInfo = $this->advertisementInfoRepository->find($id);

        if (empty($advertisementInfo)) {
            Flash::error('Advertisement Info not found');

            return redirect(route('admin.advertisementInfos.index'));
        }

        $input = $request->all();

        $input['advertisement_img'] = $this->handleImageUpload($request->file('advertisement_img'), $advertisementInfo['advertisement_img'], 'advertisement_img');

        $advertisementInfo = $this->advertisementInfoRepository->update($input, $id);

        Flash::success('Advertisement Info updated successfully.');

        return redirect(route('admin.advertisementInfos.index'));
    }

    /**
     * Remove the specified AdvertisementInfo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $advertisementInfo = $this->advertisementInfoRepository->find($id);

        if (empty($advertisementInfo)) {
            Flash::error('Advertisement Info not found');

            return redirect(route('admin.advertisementInfos.index'));
        }

        $this->advertisementInfoRepository->delete($id);

        Flash::success('Advertisement Info deleted successfully.');

        return redirect(route('admin.advertisementInfos.index'));
    }

    // 共用的圖片處理函式
    function processImage($image, $uploadDir, $resizeWidth = 800, $quality = 75)
    {
        if ($image) {
            $path = public_path('uploads/images/' . $uploadDir) . '/';
            $filename = time() . '_' . $image->getClientOriginalName();

            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            // 壓縮圖片
            $image = Image::make($image)
                ->orientate()
                ->resize($resizeWidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', $quality); // 設定 JPG 格式和品質
            $image->save($path . $filename);

            return 'images/' . $uploadDir . '/' . $filename;
        }

        return '';
    }

    // 共用圖片處理函式
    function handleImageUpload($newImage, $existingImagePath, $uploadDir, $resizeWidth = 800, $quality = 75)
    {
        if ($newImage) {
            $path = public_path('uploads/images/' . $uploadDir . '/');
            $filename = time() . '_' . $newImage->getClientOriginalName();

            // 確保目錄存在
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            // 若已有圖片，刪除舊圖片
            if (!empty($existingImagePath) && File::exists(public_path('uploads/' . $existingImagePath))) {
                File::delete(public_path('uploads/' . $existingImagePath));
            }

            // 壓縮並保存新圖片
            $image = Image::make($newImage)
                ->orientate()
                ->resize($resizeWidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', $quality); // 設定 JPG 格式和品質
            $image->save($path . $filename);

            return 'images/' . $uploadDir . '/' . $filename;
        }

        // 若無新圖片，返回舊圖片路徑
        return $existingImagePath;
    }
}
