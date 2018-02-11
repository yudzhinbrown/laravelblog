@extends('admin.layouts.app_admin')

@section('content')
    <div class="row wrap-content">
        <div class="container-fluid">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="float-left">Тэги</h2>
                        <a class="btn btn-primary float-right" href="{{ route('admin.tag.create') }}">Добавить</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Найменование</th>
                                    <th>Приставка</th>
                                    <th class="text-center">Публикация</th>
                                    <th class="text-center">Изменить</th>
                                    <th class="text-center">Удалить</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($tags as $tag)
                                    <tr>
                                        <td>{{ $tag->id }}</td>
                                        <td>{{ $tag->title }}</td>
                                        <td>{{ $tag->slug }}</td>
                                        <td class="text-center">
                                            @if($tag->published)
                                                <i class="fa fa-thumbs-up"></i>
                                            @else
                                                <i class="fa fa-thumbs-down"></i>
                                            @endif
                                        </td>
                                        <td class="text-center"><a href="{{ route('admin.tag.edit', $tag) }}"><i class="fa fa-edit"></i></a></td>
                                        <td class="text-center">
                                            <form action="{{ route('admin.tag.destroy', $tag)}}" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn-delete" type="submit"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr><td><h4>Таблица тэгов пустая!!!</h4></td></tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection