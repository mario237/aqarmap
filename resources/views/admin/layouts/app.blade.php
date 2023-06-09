<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title' , 'Aqarmap Admin Panel')</title>
    @vite(['resources/sass/app.scss' , 'resources/js/app.js'])
    @include('admin.includes.styles')
</head>
<body>

@include('admin.includes.header')


@yield('content')


@include('admin.includes.scripts')
</body>
</html>
