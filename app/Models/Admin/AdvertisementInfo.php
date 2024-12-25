<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class AdvertisementInfo
 * @package App\Models\Admin
 * @version December 22, 2024, 7:42 pm UTC
 *
 * @property string $advertisement_name
 * @property string $advertisement_img
 * @property string $advertisement_link
 * @property string $advertisement_position
 * @property boolean $advertisement_status
 */
class AdvertisementInfo extends EloquentModel
{
    use SoftDeletes;


    public $table = 'advertisement_infos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'advertisement_name',
        'advertisement_img',
        'advertisement_link',
        'advertisement_position',
        'advertisement_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'advertisement_name' => 'string',
        'advertisement_img' => 'json',
        'advertisement_position' => 'string',
        'advertisement_status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'advertisement_img' => 'nullable',
        'advertisement_link' => 'nullable',
        'advertisement_position' => 'nullable',
        'advertisement_status' => 'nullable'
    ];


}
