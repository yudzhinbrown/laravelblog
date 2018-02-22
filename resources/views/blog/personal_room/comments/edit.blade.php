@extends('blog.layouts.app_blog')
@section('title', 'Мои Посты')

@section('content')
    <div class="col-md-10">
        <div class="content-grid">
            <div class="content-grid-info">
                <div class="post-info">
                    <div class="content-form">
                        <h3>Добавить пост</h3>
                        <form method="post" action="{{ route('comment.update', $comment) }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            @include('blog.personal_room.comments.pentials.form')
                        </form>
                    </div>

                </div>
            </div>
        </div>


    </div>
@endsection