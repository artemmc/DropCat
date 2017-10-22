<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Supplier;

class AdminSupplierController extends Controller
{
	public function show()
	{
		$title = "DropCat - Дропшиппинг каталог | Список - Поставщиков";

		$suppliers = Supplier::all();

		return view('admin/suppliers')->with(['suppliers'=>$suppliers,'title'=>$title]);
	}
}

