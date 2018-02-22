@extends('blog.layouts.app_blog')

@section('title', $post->title)
@section('content')

@section('content')
    <div class="col-md-10 ">
        <div class="content-grid">
            <div class="content-grid-info">
                <div class="post-info">
                    <h4>
                        <a href="#">{{ $post->title }}</a>
                        <p>{{ $post->getDate() }} || Автор : {{ $post->user() }}</p>

                    </h4>
                    <p>
                        @isset($post->tags->first()->id)
                            Тэги:
                            @foreach($post->tags as $tag)
                                <span class="tag"><a href="{{ url("/tag_{$tag->slug}") }}">{{ $tag->title }}</a></span>
                            @endforeach
                            @else
                        @endisset
                    </p>
                    @isset($post->video)
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/{{$post->video}}">
                        </iframe>
                    @endisset
                    <p>{!! $post->description !!}</p>
                    <div class="line"></div>
                </div>
            </div>
        </div>

        @foreach($post->comments()->get() as $comment)
            <ul class="comment-list">
                <h5 class="post-author_head"> {{ $comment->user->name }}</h5>
                <li><img src="images/avatar.png" class="img-responsive" alt="">
                    <div class="desc">
                        <p>{!! $comment->text !!}</p>
                    </div>
                    <div class="clearfix"></div>
                </li>
            </ul>
        @endforeach

        <div class="content-form">
            <h3>Добавить комментарий</h3>
            @guest()
                <p>Добавлять комментарии могут только зарегистрированные пользователи </p>
            @else
                <form action="{{ route('comment.store') }}" method="post">
                    {{ csrf_field() }}
                    <textarea placeholder="Комментарий" name="text"></textarea>
                    <input type="hidden" name="commentable_id" value="{{ $post->id }}">
                    <input type="submit" value="Отправить">
                </form>
            @endguest
        </div>
    </div>
@endsection