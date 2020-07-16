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

//注册
Route::get("/user/reg","User\RegController@reg");
Route::post("/user/regdo","User\RegController@regdo");

//登陆
Route::get("/user/login","User\LoginController@login");
Route::post("/user/logindo","User\LoginController@logindo");

//首页
Route::get("/user/index","User\IndexController@index");

//个人中心
Route::get("/user/personage","User\PersonageController@personage")->middleware("checklogin");