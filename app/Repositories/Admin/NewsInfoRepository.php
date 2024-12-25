<?php

namespace App\Repositories\Admin;

use App\Models\Admin\NewsInfo;
use App\Repositories\BaseRepository;

/**
 * Class NewsInfoRepository
 * @package App\Repositories\Admin
 * @version December 22, 2024, 7:02 pm UTC
*/

class NewsInfoRepository extends BaseRepository
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
        return NewsInfo::class;
    }
}
