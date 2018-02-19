<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @include('blog.layouts.shared.style')
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!----webfonts---->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic' rel='stylesheet' type='text/css'>
    @include('blog.layouts.shared.scripts')

</head>
<body>
@include('blog.layouts.shared.header')
<div class="content">
    <div class="container">
        <div class="content-grids">
            @yield('content')

            @include('blog.layouts.shared.navbar')
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---->
@include('blog.layouts.shared.footer')


	
