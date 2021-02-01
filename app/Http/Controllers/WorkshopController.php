<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Workshop;
use Illuminate\Support\Facades\DB;

class WorkshopController extends Controller
{

    public function __construct()
    {
    }

    public function createDummyData()
    {
        /*get data dummy from global function*/
        $datas = getDataWorkshop();

        /*looping to save data with eloquent*/
        foreach ($datas as $data) {
            $workshop          = new Workshop();
            $workshop->name    = $data['name'];
            $workshop->address = $data['address'];
            $workshop->save();
        }

        return response()->json(responseJSON(3, 'OK', 'Data successfully created'), 201);
    }

}