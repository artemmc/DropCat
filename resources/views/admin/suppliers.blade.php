@extends('blocks.site')

@section('content')
<h1 class="text-center">Список - Поставщиков</h1>
<div class="row">
    <div class="col-md-offset-10 col-md-2 text-right">
        <a href="{{ route('adminSupplierAdd') }}" class="btn btn-success">Добавить</a>
    </div>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <td>ID</td>
            <td>Название</td>
            <td>Контактное лицо</td>
            <td>Город</td>
            <td>Телефон</td>
            <td>Viber</td>
            <td>Группа VK</td>
            <td>Цены (таблица)</td>
            <td>Действия</td>
        </tr>
    </thead>
    <tbody>
        @foreach($suppliers as $supplier)
        <tr>
            <td><a href="{{ route('supplierShow',['id'=>$supplier->id]) }}">{{ $supplier->id }}</a></td>
            <td><a href="{{ route('supplierShow',['id'=>$supplier->id]) }}">{{ $supplier->name }}</a></td>
            <td><a href="{{ $supplier->admin_link_vk}}">{{ $supplier->admin_name }}</a></td>
            <td>{{ $supplier->city }}</td>
            <td>
                <a href="tel:{{ $supplier->admin_phone }}">{{ $supplier->admin_phone }}</a>
                <a href="tel:{{ $supplier->admin_phone_1 }}">{{ $supplier->admin_phone_1 }}</a>
                <a href="tel:{{ $supplier->admin_phone_2 }}">{{ $supplier->admin_phone_2 }}</a>
            </td>
            <td>
                @if (($supplier->viber) == 0)
                Нет
                @else
                Да
                @endif
            </td>
            <td><a href="{{ $supplier->group_vk }}">Перейти в VK</a></td>
            <td><a href="{{ $supplier->table_link }}">Перейти в таблицу</a></td>
            <td>
                <form action="{{ route('adminSupplierEdit',['id' => $supplier->id]) }}" method="POST">
                    {{ method_field('UPDATE') }}
                    {{ csrf_field() }}
                <button type="submit" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                </form>
                <form action="{{ route('supplierDelete',['id' => $supplier->id]) }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                </form>
            </td>
        </tr>
        @endforeach()
    </tbody>
</table>
@endsection