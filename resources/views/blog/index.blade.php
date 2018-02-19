@extends('blog.layouts.app_blog')

@section('content')
    <div class="col-md-8 content-main">
        <div class="content-grid">
            <div class="content-grid-info">
                <img src="{{ asset('bloglte/images/post1.jpg') }}" alt=""/>
                <div class="post-info">
                    <h4><a href="single.html">Lorem ipsum dolor sit amet</a>  July 30, 2014 / 27 Comments</h4>
                    <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis.</p>
                    <a href="single.html"><span></span>READ MORE</a>
                </div>
            </div>
            <div class="content-grid-info">
                <img src="{{ asset('bloglte/images/post2.jpg') }}" alt=""/>
                <div class="post-info">
                    <h4><a href="single.html">Lorem ipsum dolor sit amet</a>  July 30, 2014 / 27 Comments</h4>
                    <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis.</p>
                    <a href="single.html"><span></span>READ MORE</a>
                </div>
            </div>
            <div class="content-grid-info">
                <img src="{{ asset('bloglte/images/post3.jpg') }}" alt=""/>
                <div class="post-info">
                    <h4><a href="single.html">Lorem ipsum dolor sit amet</a>  July 30, 2014 / 27 Comments</h4>
                    <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis.</p>
                    <a href="single.html"><span></span>READ MORE</a>
                </div>
            </div>

        </div>
    </div>
@endsection

