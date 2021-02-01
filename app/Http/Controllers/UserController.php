<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Workshop;

class UserController extends Controller
{

    public function __construct()
    {
    }

    public function createDummyData()
    {
        /*get data dummy from global function*/
        $datas = getDataUser();

        /*looping to save data with eloquent*/
        foreach ($datas as $data) {
            $workshop_id         = Workshop::where('name', $data['workshop_name'])->value('workshop_id');
            $user                = new User();
            $user->username      = $data['username'];
            $user->password      = $data['password'];
            $user->token         = $data['token'];
            $user->name          = $data['name'];
            $user->email         = $data['email'];
            $user->national_id   = $data['national_id'];
            $user->workshop_id   = $workshop_id;
            $user->status_active = $data['status_active'];
            $user->save();
        }

        return response()->json(responseJSON(3, 'OK', 'Data successfully created'), 201);
    }

}