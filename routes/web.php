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

//客户
Route::prefix('/client')->group(function(){
    Route::get('create','admin\Client@create'); //客户添加
    Route::post('create_do','admin\Client@create_do'); 
    Route::any('index','admin\Client@index');  //客户列表
    Route::get('del/{client_id}','admin\Client@del');  //客户删除
});

//联系人
Route::prefix('/contact')->group(function(){
	Route::get('index', 'admin\Contact@index'); //联系人添加视图
	Route::any('create', 'admin\Contact@create'); //联系人执行添加
	Route::any('list', 'admin\Contact@list'); //联系人列表展示
	Route::any('delete/{contact_id}', 'admin\Contact@delete'); //联系人删除
	
});