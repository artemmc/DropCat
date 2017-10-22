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


Route::get('suppliers/', 'SupplierController@index');

Route::get('supplier/{id}', 'SupplierController@show')->name('supplierShow');

Route::get('admin/suppliers/', 'AdminSupplierController@show')->name('adminSupplierShow');

Route::get('admin/supplier/add', 'SupplierController@add');

Route::post('admin/supplier/add', 'SupplierController@save')->name('supplierSave');

Route::delete('admin/supplier/delete/{supplier_id}', function (\App\Supplier $supplier_id) {

		//$supplier_tmp = \App\Supplier::where('id', $id)->first();

		$supplier_id->delete();

		return redirect ('suppliers/');

})->name('supplierDelete');