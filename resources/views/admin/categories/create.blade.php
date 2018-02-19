@extends('admin.layouts.app_admin')

@section('content')
    <section class="forms">
        <div class="container-fluid">
            <div class="row  wrap-content">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Создание категории</h4>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal form-admin" method="post" action="{{ route('admin.category.store') }}">
                                {{ csrf_field() }}
                                @include('admin.categories.pantials.form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection