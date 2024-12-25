<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class NewsInfo
 * @package App\Models\Admin
 * @version December 22, 2024, 7:02 pm UTC
 *
 * @property string $title
 * @property string $content
 * @property string $release_date
 */
class NewsInfo extends EloquentModel
{
    use SoftDeletes;


    public $table = 'news_infos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'content',
        'release_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'release_date' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'content' => 'nullable',
        'release_date' => 'nullable'
    ];


}
