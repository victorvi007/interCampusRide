<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
        <link href="{{ asset('assets/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/output.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/iziToast/iziToast.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/iziToast/iziToast.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
        }
    </style>

    @stack('script')

    <title>Login</title>
</head>

<body>
    @yield('content')


</body>

</html>
