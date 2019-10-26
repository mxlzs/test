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

Route::prefix('/client')->group(function(){
    Route::get('create','admin\Client@create'); //客户添加
    Route::post('create_do','admin\Client@create_do'); 
    Route::any('index','admin\Client@index');  //客户列表
    Route::get('del/{client_id}','admin\Client@del');
});