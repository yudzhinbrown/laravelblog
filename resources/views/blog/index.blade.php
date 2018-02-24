@extends('blog.layouts.app_blog')

@section('title', 'Главная')
@section('content')
    <div class="col-md-10 ">
        <div class="content-grid">
            @forelse($posts as $post)
                <div class="content-grid-info">
                    <div class="post-info">
                        <h4><a href="{{ route('post', [$post->category->slug, $post->slug]) }}">{{ $post->title }}</a>  {{ $post->getDate() }}</h4>
                        <p>{!! $post->description_short !!}</p>
                        <a href="{{ route('post', [$post->category->slug, $post->slug]) }}"><span></span>Прочитайте больше</a>
                    </div>
                </div>
            @empty
                <h2>Опубликованных записей нет</h2>
            @endforelse
        </div>
    </div>
@endsection