<?php

namespace App\Repositories\Admin;

use App\Models\Admin\AdvertisementInfo;
use App\Repositories\BaseRepository;

/**
 * Class AdvertisementInfoRepository
 * @package App\Repositories\Admin
 * @version December 22, 2024, 7:42 pm UTC
*/

class AdvertisementInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'advertisement_name',
        'advertisement_img',
        'advertisement_link',
        'advertisement_position',
        'advertisement_status'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AdvertisementInfo::class;
    }
}
