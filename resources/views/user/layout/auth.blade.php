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

    @if(Session::has('success'))
    <script>
        iziToast.success({
            message: '{{ Session::get('success') }}',
            position: 'topCenter',
            color: '#dc3545',
            messageColor: '#fff',
            theme: 'dark',
        });

    </script>
@endif

    @if(Session::has('error'))
    <script>
        iziToast.error({
            message: '{{ Session::get('error') }}',
            position: 'topCenter',
            color: '#dc3545',
            messageColor: '#fff',
            theme: 'dark',
        });

    </script>
@endif

@foreach($errors->all() as $error)

@if($error)
<script>
    iziToast.error({
        message: '{{ $error }}',
        position: 'topCenter',
        color: '#dc3545',
        messageColor: '#fff',
        theme: 'dark',
    });

</script>
@endif




@endforeach
</body>

</html>
