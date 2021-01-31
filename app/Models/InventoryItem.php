<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model
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
      'sku_number', 'name_item', 'category_item', 'demand', 'min', 'max', 'stock', 'on_order', 'lead_time', 'sgt_order'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
      'inventory_id'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'inventory_item';

    protected $primaryKey = 'inventory_id';

}
