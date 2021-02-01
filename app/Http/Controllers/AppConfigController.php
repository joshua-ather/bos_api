<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AppConfig;

class AppConfigController extends Controller
{
    public function __construct()
    {

    }

    public function createDummyData()
    {
        /*get data dummy from global function*/
        $datas = getAppConfig();

        /*looping to save data with eloquent*/
        foreach ($datas as $data) {
            $user                  = new AppConfig();
            $user->name_company    = $data['name_company'];
            $user->name_alias      = $data['name_alias'];
            $user->picture_company = $data['picture_company'];
            $user->save();
        }

        return responseJSON(3, 'OK', 'Data successfully created', 201);
    }

}