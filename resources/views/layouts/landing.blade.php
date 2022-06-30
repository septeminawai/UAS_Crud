<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">

    <!--=============== REMIX ICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>@yield('title')</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        @include('layouts.components.header')
    </header>

    <main class="main">
        @yield('content')
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
      @include('layouts.components.footer')
    </footer>

    <!--=============== SCROLL REVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>
@include('sweetalert::alert')
</html>
