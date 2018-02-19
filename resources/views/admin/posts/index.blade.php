@extends('admin.layouts.app_admin')

@section('content')
    <div class="row wrap-content">
        <div class="container-fluid">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="float-left">Посты</h2>
                        <a class="btn btn-primary float-right" href="{{ route('admin.post.create') }}">Добавить</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Найменование</th>
                                    <th>Слог</th>
                                    <th class="text-center">Публикация</th>
                                    <th class="text-center">Изменить</th>
                                    <th class="text-center">Удалить</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($posts as $post)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->slug }}</td>
                                        <td class="text-center">
                                            @if($post->published)
                                                <i class="fa fa-thumbs-up"></i>
                                            @else
                                                <i class="fa fa-thumbs-down"></i>
                                            @endif
                                        </td>
                                        <td class="text-center"><a href="{{ route('admin.post.edit', $post) }}"><i class="fa fa-edit"></i></a></td>
                                        <td class="text-center">
                                            <form action="{{ route('admin.post.destroy', $post)}}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn-delete" type="submit"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td><h4>Таблица с постами пуста</h4></td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection