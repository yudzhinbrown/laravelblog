@extends('admin.layouts.app_admin')

@section('content')
    <div class="row wrap-content">
        <div class="container-fluid">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="float-left">Карегории</h2>
                            <a class="btn btn-primary float-right" href="{{ route('admin.category.create') }}">Добавить</a>
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
                                @forelse($categories as $category)
                                    <tr>
                                        <td>{{ $category->title }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td class="text-center">
                                        @if($category->published)
                                            <i class="fa fa-thumbs-up"></i>
                                        @else
                                            <i class="fa fa-thumbs-down"></i>
                                            @endif
                                            </td>
                                        <td class="text-center"><a href="{{ route('admin.category.edit', $category) }}"><i class="fa fa-edit"></i></a></td>
                                        <td class="text-center">
                                            <form action="{{ route('admin.category.destroy', $category)}}" method="post">
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
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection