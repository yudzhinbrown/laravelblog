@extends('blog.layouts.app_blog')

@section('title', $post->title)
@section('content')

@section('content')
    <div class="col-md-8 content-main">
        <div class="content-grid">
                <div class="content-grid-info">
                    <div class="post-info">
                        <h4><a href="#">{{ $post->title }}</a>{{ $post->getDate() }} || Автор : {{ $post->user() }}</h4>
                        @isset($post->video)
                            <iframe width="100%" height="350" src="https://www.youtube.com/embed/{{$post->video}}">
                            </iframe>
                        @endisset
                        <p>{!! $post->description !!}</p>
                        <div class="line"></div>

                    </div>
                </div>
        </div>
    </div>

        {{--<ul class="comment-list">--}}
            {{--<h5 class="post-author_head">Written by <a href="#" title="Posts by admin" rel="author">admin</a></h5>--}}
            {{--<li><img src="images/avatar.png" class="img-responsive" alt="">--}}
                {{--<div class="desc">--}}
                    {{--<p>View all posts by: <a href="#" title="Posts by admin" rel="author">admin</a></p>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
            {{--</li>--}}
        {{--</ul>--}}
        {{--<div class="content-form">--}}
            {{--<h3>Leave a comment</h3>--}}
            {{--<form>--}}
                {{--<input type="text" placeholder="Name" required="">--}}
                {{--<input type="text" placeholder="Email" required="">--}}
                {{--<input type="text" placeholder="Phone" required="">--}}
                {{--<textarea placeholder="Message"></textarea>--}}
                {{--<input type="submit" value="SEND">--}}
            {{--</form>--}}
        {{--</div>--}}
@endsection