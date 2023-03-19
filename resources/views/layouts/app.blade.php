<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title')
    </title>

    <meta name="description"
          content="عقارماب اكبر محرك بحث في عقارات مصر يمكنك من خلاله البحث عن عقارات للبيع او عقارات للايجار من شقق وفيلات"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="Accept-CH" content="DPR, Width, Viewport-Width"/>

    <!-- Font Awesome-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"
          crossorigin/>
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet"/>
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}"/>
    @yield('styles')
</head>
<body class="rtl">
    <main>
        @include('front.includes.header')
        @yield('content')
    </main>

    @include('front.includes.footer')
    <!-- Javascripts -->
    <script src="{{ asset('assets/front/js/main.js') }}"></script>
    <script>
        function clickMe() {
            $('#inputWrapper').toggle('d-none')
            $('#txt1').toggle(0, 'd-none')
            $('#txt2').toggle(0, 'd-none')
        }
    </script>
    @yield('scripts')
</body>

</html>
