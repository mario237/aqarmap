<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>

    <title>@yield('title' , config('app.name'))</title>


    @include('front.includes.meta')


    @include('front.includes.styles')
</head>
<body class="rtl">
    <main>
        @include('front.includes.header')
        @yield('content')
    </main>

    @include('front.includes.footer')
    <!-- scripts -->

    @include('front.includes.scripts')
</body>

</html>
