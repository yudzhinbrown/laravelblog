@extends('admin.layouts.app_admin')

@section('content')
    <section class="forms">
        <div class="container-fluid">
            <div class="row  wrap-content">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Изменить Категорию</h4>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="{{ route('admin.category.update', $category) }}">
                                <input type="hidden" name="_method" value="put">
                                {{ csrf_field() }}
                                @include('admin.categories.form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection