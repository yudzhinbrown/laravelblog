<div class="col-md-4 content-right">
    <div class="categories">
        <h3>Категории</h3>
        <ul>
            @foreach($categories as $category)
                <li><a href="{{ url("/category_{$category->slug}") }}">{{ $category->title }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="clearfix"></div>
</div>