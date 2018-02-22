@extends('blog.layouts.app_blog')

@section('title', 'Мои Посты')

@section('content')
    <div class="col-md-10">
        <div class="content-grid">
            <div class="content-grid-info">
                <div class="post-info">
                    <div class="card-header">
                        <h2 class="float-left">Посты</h2>
                        <a class="btn btn-sub-1 float-right" href="{{ route('my_post.create') }}">Добавить</a>
                    </div>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Найменование</th>
                            <th scope="col">Слог</th>
                            <th scope="col">Удалить</th>
                            <th scope="col">Изменить</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($posts as $post)
                            <tr>
                                <th>{{ $post->title }}</th>
                                <td>{{ $post->slug }}</td>
                                <td><a href="{{ route('my_post.edit', $post) }}">Изменить</a></td>
                                <td><a href=""><form action="{{ route('my_post.destroy', $post)}}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn-delete" type="submit">Удалить</button>
                                        </form></a></td>
                            </tr>
                            @empty
                            У вас нету созданных постов
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
@endsection