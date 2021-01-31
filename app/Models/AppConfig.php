<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppConfig extends Model
{

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name_company', 'name_alias', 'picture_company'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
      'app_config_id'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'app_config';

    protected $primaryKey = 'app_config_id';

}
