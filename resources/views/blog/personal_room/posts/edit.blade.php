@extends('blog.layouts.app_blog')
@section('title', 'Мои Посты')

@section('content')
    <div class="col-md-10">
        <div class="content-grid">
            <div class="content-grid-info">
                <div class="post-info">
                    <div class="content-form">
                        <h3>Изменить</h3>
                        <form method="post" action="{{ route('my_post.update', $post) }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            @include('blog.personal_room.posts.pentials.form')
                        </form>
                    </div>

                </div>
            </div>
        </div>


    </div>
@endsection