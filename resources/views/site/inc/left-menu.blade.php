<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Бренды</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked">
            @foreach(App\Brands::all() as $category)
                <li><a href="/brands/{{ $category->alias }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>