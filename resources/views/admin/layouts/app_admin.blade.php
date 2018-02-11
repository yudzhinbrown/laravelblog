<!DOCTYPE html>
<html  lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    @include('admin.shared.styles')
</head>
<body>

<!-- Side Navbar -->
@include('admin.shared.navbar')
<div class="page">

    <!-- Header -->
    @include('admin.shared.header')
    <!--Content-->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @yield('content')
    <!--Footer-->
    @include('admin.shared.footer')
</div>
    <!--Script-->
@include('admin.shared.scripts')
</body>
</html>