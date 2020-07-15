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
Route::get("/admin/reg","Admin\RegController@reg");
Route::post("/admin/regdo","Admin\RegController@regdo");

//登陆
Route::get("/admin/login","Admin\LoginController@login");
Route::post("/admin/logindo","Admin\LoginController@logindo");