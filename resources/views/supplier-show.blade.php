@extends('blocks.site')

@section('content')
    <div class="left col-md-3">Лого</div>
    <div class="right col-md-9">
        <h1>{{ $supplier->name }}</h1>
        <table class="table-responsive">
            <tbody>
                <tr>
                    <td>ID</td>
                    <td><a href="{{ route('supplierShow',['id'=>$supplier->id]) }}">{{ $supplier->id }}</a></td>
                </tr>
                <tr>
                    <td>Название</td>
                    <td><a href="{{ route('supplierShow',['id'=>$supplier->id]) }}">{{ $supplier->name }}</a></td>
                </tr>
                <tr>
                    <td>Контактное лицо</td>
                    <td><a href="{{ $supplier->admin_link_vk}}">{{ $supplier->admin_name }}</a></td>
                </tr>
                <tr>
                    <td>Город</td>
                    <td>{{ $supplier->city }}</td>
                </tr>
                <tr>
                    <td>Телефон</td>
                    <td>
                        <a href="tel:{{ $supplier->admin_phone }}">{{ $supplier->admin_phone }}</a>
                        <a href="tel:{{ $supplier->admin_phone_1 }}">{{ $supplier->admin_phone_1 }}</a>
                        <a href="tel:{{ $supplier->admin_phone_2 }}">{{ $supplier->admin_phone_2 }}</a>
                    </td>
                </tr>
                <tr>
                    <td>Viber</td>
                    <td>
                        @if (($supplier->viber) == 0)
                        Нет
                        @else
                        Да
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Группа VK</td>
                    <td><a href="{{ $supplier->group_vk }}">{{ $supplier->group_vk }}</a></td>
                </tr>
                <tr>
                    <td>Цены (таблица)</td>
                    <td><a href="{{ $supplier->table_link }}">{{ $supplier->table_link }}</a></td>
                </tr>
            </tbody>

        </table>


    </div>

@endsection