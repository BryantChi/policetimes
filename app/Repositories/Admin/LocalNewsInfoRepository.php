<?php

namespace App\Repositories\Admin;

use App\Models\Admin\LocalNewsInfo;
use App\Repositories\BaseRepository;

/**
 * Class LocalNewsInfoRepository
 * @package App\Repositories\Admin
 * @version December 22, 2024, 7:06 pm UTC
*/

class LocalNewsInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'content',
        'release_date'
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
        return LocalNewsInfo::class;
    }
}
