<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function runDummyData()
    {
        app()->make('App\Http\Controllers\WorkshopController')->createDummyData();
        app()->make('App\Http\Controllers\UserController')->createDummyData();
        app()->make('App\Http\Controllers\AppConfigController')->createDummyData();
        app()->make('App\Http\Controllers\InventoryItemController')->createDummyData();
    }
}
