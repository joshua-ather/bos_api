<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
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
      'name', 'address'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
      'workshop_id'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'workshop';

    protected $primaryKey = 'workshop_id';

    public function user()
    {
        return $this->hasMany('App\Models\User');
    }

}
