@extends('blog.layouts.app_blog')

@section('title', 'Мои Комментарии')

@section('content')
    <div class="col-md-10">
        <div class="content-grid">
            <div class="content-grid-info">
                <div class="post-info">
                    <div class="card-header">
                        <h2 class="float-left">Комментарии</h2>
                    </div>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Заголовок поста</th>
                            <th scope="col">Текст</th>
                            <th scope="col">Удалить</th>
                            <th scope="col">Изменить</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($comments as $comment)
                            <tr>
                                <th>{{ $comment->commentable->title }}</th>
                                <td>{{ $comment->text }}</td>
                                <td><a href="{{ route('comment.edit', $comment) }}">Изменить</a></td>
                                <td><a href=""><form action="" method="post">
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