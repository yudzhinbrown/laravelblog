@extends('blog.layouts.app_blog')

@section('title', $category->title)
@section('content')
    <div class="col-md-8 content-main">
        <div class="content-grid">
            @forelse($posts as $post)
                <div class="content-grid-info">
                    <div class="post-info">
                        <h4><a href="{{ route('post', [$category->slug, $post->slug]) }}">{{ $post->title }}</a>  {{ $post->getDate() }}</h4>
                        <p>{!! $post->description_short !!}</p>
                        <a href="{{ route('post', [$category->slug, $post->slug]) }}"><span></span>Прочитайте больше</a>
                    </div>
                </div>
            @empty
                <h2>В категории {{ $category->title }} записи отсутствуют</h2>
            @endforelse
            {{ $posts->links() }}
        </div>
    </div>
@endsection