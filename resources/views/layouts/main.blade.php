@php
    $currentRouteName = Route::currentRouteName();
@endphp

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') - xtream-forex</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="base-url-api" content="{{url('/api')}}/">
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

    @include('layouts.css')
</head>
<body>
    @if ($currentRouteName == 'login')
        @yield('body')
    @else
        <div id="preloader" class="d-none">
            <div class="loader d-none">
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__ball"></div>
            </div>
        </div>

        @include('layouts.header')

        @include('layouts.sidebar')

        <div class="content-body">
            @yield('body')
        </div>

        @include('layouts.footer')
    @endif

    @include('layouts.js')
</body>
</html>
