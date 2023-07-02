<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="{{ asset('assets/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/output.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/advert.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/iziToast/iziToast.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/iziToast/iziToast.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
        }
    </style>
    @stack('script')
    @stack('timer-scripts')
    <title>Document</title>
</head>

<body>


    <div class="relative">
        <div class="mobile-menu hidden" id="mobile-menu">
            <nav class="grid my-auto h-screen text-center bg-primary fixed w-screen z-50"
                style="background-image:url('{{ asset('assets/images/background/banner.jpg') }}');background-size: cover; background-position: right; z-index:55;">
                <div class="navigation grid items-center  my-auto">

                    <a href="{{ route('home') }}"
                        class="my-6 font-medium text-light  @php if(url()->current() == route('home')){ echo 'border-b-4';}else{echo 'border-0';} @endphp">Ride</a>
                    {{-- <a href="#" class="my-6 font-medium text-light opacity-50  @php if(url()->current() == route('')){ echo 'opacity-100';}else{echo 'opacity-50';}  @endphp">ABOUT</a> --}}
                    <a href="#" target="_blank" class="my-6 font-medium text-light opacity-50 ">CHAT</a>
                    <a href="#" class="my-6 font-medium text-light  {{--   @php  if(url()->current() == route('dashboard')){ echo 'opacity-100';}else{echo 'opacity-50';}  @endphp --}}">SETTINGS</a>


                    @if (!auth()->user())
                        <a href="{{ route('login') }}"
                            class="my-6 font-medium text-light    @php if(url()->current() == route('login')){ echo 'opacity-100';}else{echo 'opacity-50';} @endphp ">LOGIN</a>
                        <a href="{{ route('register') }}"
                            class="my-6 font-medium text-lemon   {{-- @php if(url()->current() == route('register')){ echo 'opacity-100';}else{echo 'opacity-50';}  @endphp --}}">REGISTER</a>
                    @endif



                    @auth

                        <form action="{{ route('logout') }}" method="post" class="my-4">

                            <a class="my-6 font-medium text-light   p-4"><button type="submit"><i
                                        class="fas fa-sign-out"></i> Logout</button> </a>
                        </form>
                    @endauth


                </div>
            </nav>
        </div>
        <header class="flex justify-between w-full   px-10 py-5 z-50"
            style="z-index:55; background: rgb(34,125,229);
        background: linear-gradient(157deg, rgba(34,125,229,1) 0%, rgba(148,40,148,0.8575805322128851) 60%);">
            <div class="left ">
                <a href="{{ route('home') }}">
                    <div class="logo flex">
                        <img src="{{ asset('assets/images/logo/logo-new.png') }}" class="" alt="">
                        <div class="logo-name my-auto font-bold text-light">InterCampusRide</div>
                    </div>
                </a>

            </div>

            <div class="right hidden md:flex lg:flex ">
                <nav class="mr-12 my-auto">
                    <a href="{{ route('home') }}"
                        class="mx-2 font-medium text-light   @php if(url()->current() == route('home')){ echo 'border-b-4';}else{echo 'border-0';} @endphp">RIDES</a>
                    <a href="#" class="mx-2 font-medium text-light    hover:border-b-4">ABOUT</a>
                    <a href="#" target="_blank" class="mx-2 font-medium text-light   hover:border-b-4 ">WHITE
                        PAPER</a>
                    <a href="#"
                        class="mx-2 font-medium text-light   hover:border-b-4 {{-- @php if(url()->current() == route('dashboard')){ echo 'opacity-100';}else{echo 'opacity-50';}  @endphp --}}">SETTINGS</a>
                    <a href="#"
                        class="mx-2 font-medium text-light   hover:border-b-4 {{-- @php if(url()->current() == route('app')){ echo 'opacity-100';}else{echo 'opacity-50';}  @endphp --}}">SUPPORT</a>




                    @if (!auth()->user())
                        <a href="{{ route('login') }}"
                            class="mx-2 font-medium text-light  hover:border-b-4  @php if(url()->current() == route('login')){ echo 'border-b-4';}else{echo 'border-0';} @endphp ">LOGIN</a>

                        <a href="{{ route('register') }}"
                            class="mx-2 p-2 px-4 inline-block rounded btn bg-primary font-medium text-light   {{-- @php if(url()->current() == route('app')){ echo 'opacity-100';}else{echo 'opacity-50';}  @endphp --}}">
                            <i class="fa-solid fa-user-plus mx-1"></i> JOIN</a>
                    @endif

                </nav>




                @auth

                    <form class="join my-auto" action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="font-medium text-light  text-primary"> <i class="fas fa-sign-out"></i>
                            LOGOUT</button>
                    </form>
                @endauth

            </div>
            <div class="block md:hidden my-auto z-55" style="z-index:70">
                <button>
                    <i class="fas fa-bars text-light" id="show"></i>
                    <i class="fa-solid fa-xmark text-light " id="close"></i>
                </button>
            </div>
        </header>

        <div class="">

            @yield('content')
        </div>


        <footer class="text-center text-light p-4">
            <p class="text-danger"> &copy Final Year Project</p>
        </footer>

    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/nav.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @push('script')
        @foreach ($errors->all() as $error)
            @if ($error)
                <script>
                    iziToast.success({
                        title: 'Caution',
                        message: `{{ $error }}`,
                        position: 'topRight',
                        color: 'red',
                    });
                </script>
            @endif
        @endforeach

        @if (Session::has('success'))
            <script>
                iziToast.success({
                    title: 'Caution',
                    message: `{{ Session::get('success') }}`,
                    position: 'topRight',
                    color: '#ffffff',
                });
            </script>
        @endif

        @if (Session::has('error'))
            <script>
                iziToast.success({
                    title: 'Caution',
                    message: `{{ Session::get('error') }}`,
                    position: 'topRight',
                    color: '#ffffff',
                });
            </script>
        @endif
        <script>
                 $('#submit').on('keypress', function(e) {
                        return e.which !== 32;
                    });
        </script>
    @endpush
</body>

</html>
