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
		$title = "DropCat - Дропшиппинг каталог";
    return view('index', ['title'=>$title]);
});

Route::resource('admin/suppliers', 'Admin\SupplierAction');

Route::get('/brands/{alias}', 'BrandsController@brandsAction');
