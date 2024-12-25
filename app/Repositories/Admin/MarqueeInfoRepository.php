<?php

namespace App\Repositories\Admin;

use App\Models\Admin\MarqueeInfo;
use App\Repositories\BaseRepository;

/**
 * Class MarqueeInfoRepository
 * @package App\Repositories\Admin
 * @version October 12, 2024, 12:39 pm UTC
*/

class MarqueeInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'marquee_text',
        'used'
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
        return MarqueeInfo::class;
    }
}
