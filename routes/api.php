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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
app('Dingo\Api\Auth\Auth')->extend('jwt', function ($app) {
    return new Dingo\Api\Auth\Provider\JWT($app['Tymon\JWTAuth\JWTAuth']);
});


$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

    $api->post('login', 'App\Http\Api\Auth\LoginController@login');
    $api->post('register', 'App\Http\Api\Auth\RegisterController@register');
    $api->get('One/index' , 'App\Http\Controllers\OneController@index');
//    $api->post('One/one' , 'App\Http\Controllers\OneController@one');

//    $api->group(['namespace' => 'App\Http\Controllers'], function($api){
//        $api->any('One','OneController');
//    });
    $api->get('test',function (){
        return '111';
    });

    $api->group(['protected' => true, 'middleware' => 'api.auth'],function ($api){

    });
});

