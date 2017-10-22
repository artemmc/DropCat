<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Supplier;

class SupplierController extends Controller
{
	public function index()
	{
		$title = "DropCat - Дропшиппинг каталог | Список - Поставщиков";

		$suppliers = Supplier::all();

    	//dump($suppliers);

		return view('suppliers')->with(['suppliers'=>$suppliers,'title'=>$title]);
	}

	public function show($id)
	{
		$supplier = Supplier::find($id);
    	//dump($supplier);

		$title = $supplier->name;
		return view('supplier-show')->with(['supplier'=>$supplier,'title'=>$title]);
	}

	public function add()
	{
		$title = "Добавить поставщика";
		return view('supplier-add')->with(['title'=>$title]);
	}


	public function save(Request $request)
	{
		$title = "Добавить поставщика";
		$this->validate($request, [
			"name" => 'required|max:255',
			"group_vk" => 'required|unique:suppliers'
		]);
		$data = $request->all();

		$supplier = new Supplier;
		$supplier->fill($data);

		$supplier->save($data);

		return view('supplier-add')->with(['title'=>$title]);
		//dump($supplier);
	}
}
