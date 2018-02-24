@extends('blog.layouts.app_blog')

@section('title', 'Настройка')

@section('content')
    <div class="col-md-10">
        <div class="content-grid">
            <div class="content-grid-info">
                <div class="post-info">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="content-form">
                        <form action="{{ route('edit_password') }}" method="post">
                            @csrf
                            <h2>Изменить пароль</h2>
                            <label class="col-sm-3">Текущий пароль:</label>
                            <div class="col-sm-9"><input type="text" required name="password_old"></div>

                            <div class="line"></div>

                            <label class="col-sm-3">Новый пароль:</label>
                            <div class="col-sm-9"><input type="text"  required name="password_new" ></div>
                            <div class="line"></div>

                            <label class="col-sm-3">Подтвердите новый пароль:</label>
                            <div class="col-sm-9"><input type="text"  required  name="password_new_confirmation">
                            </div>


                            <div class="line"></div>

                            <input type="submit" value="Сохранить изменения">
                        </form>
                    </div>
                        <div class="content-form">
                            <form action="{{ route('edit_email') }}" method="post">
                                @csrf
                                <h2>Изменить e-mail</h2>
                                <label class="col-sm-12">Текущий e-mail: {{ Auth::user()->email }}</label>
                                <div class="line"></div>
                                <label class="col-sm-3">Новый e-mail:</label>
                                <div class="col-sm-9"><input type="text"  required name="email"></div>

                                <div class="line"></div>

                                <input type="submit" value="Сохранить изменения">
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection