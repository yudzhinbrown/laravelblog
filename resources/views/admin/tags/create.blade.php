@extends('admin.layouts.app_admin')

@extends('admin.layouts.app_admin')

@section('content')
    <section class="forms">
        <div class="container-fluid">
            <div class="row  wrap-content">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Создание тэга</h4>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="{{ route('admin.tag.store') }}">
                                {{ csrf_field() }}
                                @include('admin.tags.form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection