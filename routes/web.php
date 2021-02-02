<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/* Routing url with prefix /api */
$router->group(['prefix' => 'api'], function () use ($router) {
    /* Routing url with prefix /v1 */
    $router->group(['prefix' => 'v1'], function () use ($router) {
        $router->get('create_workshop', 'WorkshopController@createDummyData');
        $router->get('create_user', 'UserController@createDummyData');
        $router->get('create_app-config', 'AppConfigController@createDummyData');
        $router->get('create_inventory', 'InventoryItemController@createDummyData');
        $router->get('create_dummy', 'Controller@runDummyData');

        $router->get('show_user', 'UserController@showUser');
        $router->get('show_app-config', 'AppConfigController@showAppConfig');
    });
});
