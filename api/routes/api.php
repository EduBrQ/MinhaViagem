<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

RouteDingo::version('v1', function () {
    RouteDingo::group(['namespace' => 'App\Http\Controllers\Api', 'as' => 'api'], function () {

        RouteDingo::resource('/acomodacoes','AcomodacaoController');


        //POSSO ENVIAR ATÉ 10 REQUISIÇÕES POR MINUTO PARA ESTE MIDDLEWARE
        RouteDingo::post('/auth/login', [
            'uses' => 'AuthController@login',
            'limit' => 10,
            'expires' => 1
        ]);

        //POSSO DAR REFRESH NO MEU TOKEN
        RouteDingo::post('/refresh', [
            'uses' => 'AuthController@refresh',
            'limit' => 10,
            'expires' => 1
        ]);

        RouteDingo::group([
            'middleware' => ['api.auth'],
            'limit' => 100,
            'expires' => 3
        ], function () {

            RouteDingo::get('/auth/logout', 'AuthController@logout');

        });


    });
});
