@extends('blocks.site')

@section('content')
<h1 class="text-center">Редактировать - Поставщика</h1>
<div class="form">
    <form method="POST" action="{{ route('supplierSave') }}">

        <div class="form-group">
            <label for="name">Название</label>
            <input class="form-control" id="name" type="text" name="name" placeholder="Название" value="{{ $supplier->name }}">
        </div>
        <div class="form-group">
            <label for="admin_name">Контактное лицо</label>
            <input class="form-control" id="admin_name" type="text" name="admin_name" placeholder="Контактное лицо" value="{{ $supplier->admin_name }}">
        </div>
        <div class="form-group">
            <label for="admin_link_vk">Ссылка на профиль в VK</label>
            <input class="form-control" id="admin_link_vk" type="text" name="admin_link_vk" placeholder="Ссылка на профиль в VK" value="{{ $supplier->admin_link_vk }}">
        </div>
        <div class="form-group">
            <label for="city">Город</label>
            <input class="form-control" id="city" type="text" name="city" placeholder="Город" value="{{ $supplier->city }}">
        </div>
        <div class="form-group">
            <label for="admin_phone">Телефоны</label>
            <input class="form-control" id="admin_phone" type="text" name="admin_phone" placeholder="Телефон 1" value="{{ $supplier->admin_phone }}">
            <input class="form-control" id="admin_phone_1" type="text" name="admin_phone_1" placeholder="Телефон 2" value="{{ $supplier->admin_phone_1 }}">
            <input class="form-control" id="admin_phone_2" type="text" name="admin_phone_2" placeholder="Телефон 3" value="{{ $supplier->admin_phone_2 }}">
        </div>
        <div class="form-group">
            <label for="viber">Viber</label>
            <input class="form-control" id="viber" type="text" name="viber" placeholder="Viber" value="{{ $supplier->viber }}">
        </div>
        <div class="form-group">
            <label for="group_vk">Группа VK</label>
            <input class="form-control" id="group_vk" type="text" name="group_vk" placeholder="Группа VK" value="{{ $supplier->group_vk }}">
        </div>
        <div class="form-group">
            <label for="table_link">Ссылка на таблицу с ценами и наличием</label>
            <input class="form-control" id="table_link" type="text" name="table_link" placeholder="Ссылка на таблицу" value="{{ $supplier->table_link }}">
        </div>
        <div class="form-group">
            <label for="site_link">Ссылка на сайт</label>
            <input class="form-control" id="site_link" type="text" name="site_link" placeholder="Ссылка на сайт" value="{{ $supplier->site_link }}">
        </div>
        <input type="submit" class="btn btn-default" name="submit" value="Сохранить">

        {{ csrf_field() }}

    </form>
</div>
@endsection