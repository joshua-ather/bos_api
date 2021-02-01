<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\InventoryItem;

class InventoryItemController extends Controller
{

    public function __construct()
    {
    }

    public function createDummyData()
    {
        /*get data dummy from global function*/
        $datas = getInventoryItem();

        /*looping to save data with eloquent*/
        foreach ($datas as $data) {
            $user                = new InventoryItem();
            $user->sku_number    = $data['sku_number'];
            $user->name_item     = $data['name_item'];
            $user->category_item = $data['category_item'];
            $user->demand        = $data['demand'];
            $user->min           = $data['min'];
            $user->max           = $data['max'];
            $user->stock         = $data['stock'];
            $user->on_order      = $data['on_order'];
            $user->lead_time     = $data['lead_time'];
            $user->sgt_order     = $data['sgt_order'];
            $user->status_moving = $data['status_moving'];
            $user->alarm         = $data['alarm'];
            $user->save();
            usleep(200000);
        }

        return response()->json(responseJSON(3, 'OK', 'Data successfully created'), 201);
    }

}