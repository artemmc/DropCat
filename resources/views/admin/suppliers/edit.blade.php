@extends('admin.index')

@section('content')

    {!! Form::model($supplier, ['route' => ['suppliers.update', $supplier->id], 'method' => 'put']) !!}


    <div class="form-group">
        {{ Form::label('name','Название') }}
        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Название']) }}
    </div>
    <div class="form-group">
        {{ Form::label('admin_name','Контактное лицо') }}
        {{ Form::text('admin_name', null, ['class' => 'form-control', 'placeholder' => 'Контактное лицо']) }}
    </div>
    <div class="form-group">
        {{ Form::label('admin_link_vk','Ссылка на профиль в VK') }}
        {{ Form::text('admin_link_vk', null, ['class' => 'form-control', 'placeholder' => 'Ссылка на профиль в VK']) }}
    </div>
    <div class="form-group">
        {{ Form::label('city','Город') }}
        {{ Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Город']) }}
    </div>
    <div class="form-group">

        {{ Form::label('admin_phone','Телефоны') }}
        {{ Form::text('admin_phone', null, ['class' => 'form-control', 'placeholder' => 'Телефон']) }}
        {{ Form::text('admin_phone_1', null, ['class' => 'form-control', 'placeholder' => 'Телефон 2']) }}
        {{ Form::text('admin_phone_2', null, ['class' => 'form-control', 'placeholder' => 'Телефон 3']) }}
    </div>
    <div class="form-group">
        {{ Form::label('viber','Viber') }}
        {{ Form::text('viber', null, array('class' => 'form-control', 'placeholder' => 'Viber')) }}
    </div>
    <div class="form-group">
        {{ Form::label('group_vk','Группа VK') }}
        {{ Form::text('group_vk', null, ['class' => 'form-control', 'placeholder' => 'Группа VK']) }}
    </div>
    <div class="form-group">
        {{ Form::label('table_link','Ссылка на таблицу с ценами и наличием') }}
        {{ Form::text('table_link', null, ['class' => 'form-control', 'placeholder' => 'Ссылка на таблицу с ценами и наличием']) }}
    </div>
    <div class="form-group">
        {{ Form::label('site_link','Ссылка на сайт') }}
        {{ Form::text('site_link', null, ['class' => 'form-control', 'placeholder' => 'Ссылка на сайт']) }}
    </div>

    {{ Form::submit('Изменить', ['class' => 'btn btn-primary']) }}


    {{ csrf_field() }}

    {!! Form::close() !!}
@endsection