<div class="col-md-2 content-right">
    <div class="recent">
        <h3>Категории</h3>
        <ul>
            @foreach($categories as $category)
                <li><a href="{{ url("/category_{$category->slug}") }}">{{ $category->title }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="clearfix"></div>
    <div class="recent">
        @guest
            <h3>Авторизация</h3>
            <ul>
                <li><a href="{{ route('login') }}">Вход</a></li>
                <li><a href="{{ route('register') }}">Регистрация</a></li>
            </ul>
        @else
            <h3>Приветствую, {{Auth::user()->name}}</h3>
            <ul>
                <li><a href="{{ route('my_post.index') }}">Мои Посты</a></li>
                <li><a href="{{ route('comment.index') }}">Мои комментарии</a></li>
                <li><a href="{{ route('show_settings') }}">Настройки аккаунта</a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Выйти</a></li>

            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endguest
    </div>

</div>