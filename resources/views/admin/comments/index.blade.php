@extends('admin.layouts.app_admin')

@section('content')
    <div class="row wrap-content">
        <div class="container-fluid">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="float-left">Комментарии</h2>
                        <a class="btn btn-primary float-right" href="{{ route('admin.comment.create') }}">Добавить</a>
                    </div>
                    <div class="card-body">
                            <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr >
                                    <th >Имя пользователя</th>
                                    <th >Заголовок поста</th>
                                    <th >Текст</th>
                                    <th class="text-center">Изменить</th>
                                    <th class="text-center ">Удалить</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($comments as $comment)
                                    <tr>
                                        <td>{{ $comment->user->name }}</td>
                                        <td>{{ $comment->commentable->title }}</td>
                                        <td>{!! $comment->text !!}</td>
                                        <td class="text-center"><a href="{{ route('admin.comment.edit', $comment) }}"><i class="fa fa-edit"></i></a></td>
                                        <td class="text-center">
                                            <form action="{{ route('admin.comment.destroy', $comment)}}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn-delete" type="submit"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td><h4>Таблица с категориями пуста</h4></td>
                                    </tr>

                                @endforelse
                                </tbody>
                            </table>
                            {{ $comments->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection