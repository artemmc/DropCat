<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $title = "DropCat - Дропшиппинг каталог | Админ панель";

        //$suppliers = Suppliers::all();

        return view('admin/index')->with(['title'=>$title]);
    }
}
