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


Route::get('suppliers/', 'SupplierController@index')->name('suppliersShow');

Route::get('supplier/{id}', 'SupplierController@show')->name('supplierShow');

Route::get('admin/', 'Admin\IndexController@index')->name('adminIndex');

Route::get('admin/suppliers/', 'Admin\SupplierController@index')->name('adminSupplierShow');

Route::get('admin/supplier/add', 'Admin\SupplierController@add')->name('adminSupplierAdd');

Route::get('admin/supplier/edit/{supplier_id}', 'Admin\SupplierController@edit')->name('adminSupplierEdit');

Route::post('admin/supplier/add', 'Admin\SupplierController@save')->name('supplierSave');

Route::delete('admin/supplier/delete/{supplier_id}', function (\App\Suppliers $supplier_id) {

		//$supplier_tmp = \App\Suppliers::where('id', $id)->first();

		$supplier_id->delete();

		return redirect ('suppliers/');

})->name('supplierDelete');



Route::resource('admin/suppliers', 'Admin\SupplierAction');
