<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//$api = app('Dingo\Api\Routing\Router');
//
//$api->version('v1', function ($api) {
//
//    $api->get('login', 'App\Http\Api\Auth\LoginController@login');
//    $api->get('register', 'App\Http\Api\Auth\RegisterController@register');
//    $api->controller('One','webapi\App\Http\Controllers\OneController');
//
//    $api->get('test',function (){
//        return '111';
//    });
//});
