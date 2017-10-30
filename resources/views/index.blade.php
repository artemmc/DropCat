@extends('blocks.site')

@section('content')
<h1 class="text-center">DropCat - Дропшиппинг каталог</h1>
<ul>
    <li><a href="{{ route('suppliersShow') }}">Поставщики</a></li>
    <li><a href="{{ route('adminIndex') }}">Админка</a></li>
</ul>
@endsection