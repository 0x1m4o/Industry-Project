<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} | Maritory</title>
    <link rel="icon" href="/img/itc.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif !important;
        }
        .input {
            width: 100%;
            padding: 6px;
            border-radius: 5px;
            border: 1px solid grey;
        }
        .input:focus {
            border-color: #187bcd !important;
            outline: 0 !important;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075),
                0 0 8px rgba(102, 175, 233, 0.6) !important;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075),
                0 0 8px rgba(102, 175, 233, 0.6) !important;
        }
        .shadow-btn:hover {
            background-color: #1567aa !important;
        }
        a:hover {
            text-decoration: underline !important;
        }

        @media (min-width: 600px) {
            .login {
                max-width: 200px;
            }
        }

            </style>
    {{-- Blade CSS --}}
    @yield('styles')

    @vite(['resources/js/app.js'])

</head>

<body>
    <script src="https://kit.fontawesome.com/457a315592.js" crossorigin="anonymous"></script>

    @yield('content')

    {{-- Calender JS --}}

    <script src="/calendar/dist/jquery.simple-calendar.js"></script>
    <script src="/js/calendar.js"></script>

    {{-- Dropdown JS --}}
    <script src="/js/dropdown.js"></script>

    {{-- Iconify JS --}}
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>


</body>

</html>
