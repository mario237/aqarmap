<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>

    <title>@yield('title' , config('app.name'))</title>


    @include('web.includes.meta')


    @include('web.includes.styles')
</head>
<body class="rtl">
    <main>
        @include('web.includes.header')
        @yield('content')
    </main>

    @include('web.includes.footer')
    <!-- scripts -->

    @include('web.includes.scripts')
</body>

</html>
