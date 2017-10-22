@extends('blocks.site')

@section('content')
<h1 class="text-center">Список - Поставщиков</h1>
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
        <!--     <td>Удалить</td> -->
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
            <!-- <td>
                <form action="{{ route('supplierDelete',['id' => $supplier->id]) }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger">х</button>
                </form>
            </td> -->
        </tr>
        @endforeach()
    </tbody>
</table>
@endsection