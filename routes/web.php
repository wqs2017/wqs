<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'TestController@getWqsPage'
//    return view('welcome');

//    phpinfo();
);

//todo keensting的测试页面
Route::get('keensting/test','TestController@keenstingTest');



//主页
Route::get('index','ShowPageController@getIndexPage');
//个人中心
Route::get('personal','ShowPageController@getPersonalPage');
//关注页
Route::get('attention','ShowPageController@getAttentionPage');
//直播间页
Route::get('live_room','ShowPageController@getLive_roomPage');
//充值中心
Route::get('charge_center','ShowPageController@getCharge_centerPage');
//wqs test
//充值中心
Route::get('wqs','TestController@getWqsPage');
//测试接口
Route::get('test/wqs','TestController@getTestPage');



