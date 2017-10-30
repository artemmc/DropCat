@extends('admin.index')

@section('title','Все поставщики' )

@section('content')
    <h1 class="text-center">Список - Поставщиков</h1>

    <div class="col-md-offset-9 col-md-3">
        <a href="{{ route('suppliers.create') }}" class="btn btn-default">Добавить</a>
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
            <td colspan="2">Действия</td>
        </tr>
        </thead>
        <tbody>
        @foreach($suppliers as $supplier)
            <tr>
                <td><a href="{{ route('suppliers.show',['id'=>$supplier->id]) }}">{{ $supplier->id }}</a></td>
                <td><a href="{{ route('suppliers.show',['id'=>$supplier->id]) }}">{{ $supplier->name }}</a></td>
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
                    <a href="{{ URL::to('admin/suppliers/' . $supplier->id . '/edit')  }}" class="btn btn-success" data-toggle="tooltip" title="Редактировать">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                </td>
                <td>
                    {!! Form::open(['route' => ['suppliers.destroy', $supplier->id], 'method' => 'delete']) !!}
                   <button type="submit" class="btn btn-danger" data-toggle="tooltip" title="Удалить"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach()
        </tbody>
    </table>
    {{ $suppliers->links() }}
@endsection