<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} | IT Club</title>
    <link rel="icon" href="/img/itc.png">


    {{-- CSS Template --}}
    @yield('styles')

    {{-- Link --}}

    {{-- CDN Jquery --}}
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    {{-- Font Google Poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    {{-- Font Google Montserrat --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins&display=swap"
        rel="stylesheet">

    {{-- Bootstrap --}}
    @vite(['resources/js/app.js'])

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="/css/index.css">

    {{-- Icon --}}
    <script src="https://code.iconify.design/iconify-icon/1.0.3/iconify-icon.min.js"></script>

</head>

<body>
    <script src="https://kit.fontawesome.com/457a315592.js" crossorigin="anonymous"></script>
    <!-- Navbar -->
    @auth
        @include('partials.navbar')
    @else
        @include('partials.navbar-nologin')
    @endauth

    @yield('content')



    {{-- Footer --}}
    {{-- @include('partials.footer') --}}

    {{-- Dropdown JS --}}
    <script src="/js/dropdown.js"></script>

    {{-- Iconify JS --}}
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>


</body>

</html>
