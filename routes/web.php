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
Route::get('/info', function () {
   phpinfo();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//在线订坐
Route::get('/movie','Movie\MovieController@index');
Route::get('/test','Movie\MovieController@test');
Route::get('/domovie/{key}','Movie\MovieController@doMovie');


//微信测试
Route::get('/weixin/valid','Weixin\WxController@valid');
Route::post('/weixin/valid','Weixin\WxController@valid');


