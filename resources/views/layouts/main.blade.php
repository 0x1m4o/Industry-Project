<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} | IT Club</title>

    {{-- CSS Template --}}
    @yield('styles')

    {{-- Link --}}

    {{-- Font Google Poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

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
    @if ($title == 'Landing')
        @include('partials.navbar-nologin')
    @else
        @include('partials.navbar')
    @endif

    @yield('content')

    {{-- Footer --}}
    @include('partials.footer')


    {{-- Calender JS --}}

    <script src="/calendar/dist/jquery.simple-calendar.js"></script>
    <script src="/js/calendar.js"></script>

    {{-- Dropdown JS --}}
    <script src="/js/dropdown.js"></script>

    {{-- Iconify JS --}}
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>


</body>

</html>
