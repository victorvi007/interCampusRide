@extends('user.layout.auth')
@section('content')
<form action="{{ route('store_register') }}" method="POST" class="">
    @csrf
    <div class="flex h-screen h-min-screen ">
        <div class="left h-screen hidden md:flex lg:flex bg-primary h-full w-1/2  items-center justify-center  overflow-hidden">

            <img src="/assets/images/register.png" alt="" class="">
        </div>
        <div class="right flex h-full w-full md:w-1/2 justify-center items-center overflow-y-scroll py-10 p-4">
                <div class="w-full mx-2 md:w-2/3">
            {{-- @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach --}}
            <h1 class="text-5xl m-5 text-center font-extrabold">Sign In</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">

                    <div class="my-4 border border-primary rounded-md  flex  px-1">
                        <label for="firstname" class="h-full my-auto  flex items-center"> <i class="fa-regular fa-user text-primary my-auto"></i>  </label>
                        <input type="text" name="firstname" id="firstname" placeholder="Firstname" class=" w-full h-14 mx-2 mr-0 outline-0" value="{{ old('firstname') }}">
                    </div>
                    <div class="my-4 border border-primary rounded-md flex  px-1">
                        <label for="lastname" class="h-full my-auto flex items-center"> <i class="fa-regular fa-user text-primary"></i> </label>
                        <input type="lastname" name="lastname" id="lastname" placeholder="Lastname" class="w-full h-14 mx-2  outline-0 " value="{{ old('lastname') }}">
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div class="my-4 border border-primary rounded-md  flex  px-1">
                        <label for="email" class="h-full my-auto  flex items-center"> <i class="fa-light fa-at text-primary"></i> </label>
                        <input type="text" name="email" id="email" placeholder="Email" class=" w-full h-14 mx-2 outline-0" {{ old('email') }}>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-2">

                    <div class="my-4 border border-primary rounded-md flex px-2 ">
                        <label for="regNo" class="h-full my-auto flex items-center"> <i class="fa-sharp fa-solid fa-id-badge text-primary"></i>  </label>
                        <input type="text" name="reg_number" id="regNo" placeholder="reg Number / staff Id number" class="w-full h-14 mx-2  outline-0 " {{ old('reg_number') }}>
                    </div>

                </div>

                <div class="grid grid-cols-1 gap-2">
                    <div class="my-4 border border-primary rounded-md flex px-2 ">
                        <label for="address" class="h-full my-auto flex items-center"> <i class="fa-solid fa-house-chimney text-primary"></i>  </label>
                        <input type="text" name="address" id="address" placeholder="Address" class="w-full h-14 mx-2  outline-0 " {{ old('address') }}>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div class="my-4 border border-primary rounded-md flex px-2 ">
                        <label for="faculty" class="h-full my-auto flex items-center"> <i class="fa-solid fa-school text-primary"></i>  </label>
                        <input type="text" name="faculty" id="faculty" placeholder="Faculty" class="w-full h-14 mx-2  outline-0 " {{ old('faculty') }}>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div class="my-4 border border-primary rounded-md flex px-2 ">
                        <label for="department" class="h-full my-auto flex items-center"> <i class="fa-solid fa-school text-primary"></i>  </label>
                        <input type="text" name="department" id="department" placeholder="Department" class="w-full h-14 mx-2  outline-0 " {{ old('department') }}>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-2">

                    <div class="my-4 border border-primary rounded-md flex px-2 ">
                        <label for="password" class="h-full my-auto flex items-center"> <i class="fa-solid fa-key text-primary"></i>  </label>
                        <input type="password" name="password" id="password" placeholder="Password" class="w-full h-14 mx-2  outline-0 " >
                    </div>

                </div>
                <div class="grid grid-cols-1 gap-2">

                    <div class="my-4 border border-primary rounded-md flex px-2 ">
                        <label for="confirmPassword" class="h-full my-auto flex items-center"> <i class="fa-solid fa-key text-primary"></i> </label>
                        <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" class="w-full h-14 mx-2  outline-0 ">
                    </div>

                </div>


                <div class="my-4 flex items-center">
                    <input type="checkbox" name="remember_me" id="rememberMe" class="h-4 w-4 mr-2">
                    <label for="rememberMe">Remember Me</label>
                </div>
                <div class="my-4 text-end ">
                    <button class="text-light bg-primary p-4 rounded-md w-full">Sign Up</button>
                </div>
                <div class="">
                    Already have an account? <a href="{{ route('login') }}" class="text-primary underline ">Sign In here</a>   Book a Ride <a href="{{ route('home') }}" class="text-primary underline text-end">Here</a>
                </div>
                <div class="text-end">
                    Book a Ride <a href="{{ route('home') }}" class="text-primary underline ">Here</a>
                </div>
           </div>
        </div>
    </div>
</form>

  @foreach ($errors->all() as $error)

        @if ($error)
            <script>
                iziToast.error({
                    message: `{{ $error }}`,
                    position: 'topCenter',
                    color: '#dc3545',
                    messageColor: '#fff',
                    theme: 'dark',


                });
            </script>
        @endif
    @endforeach

    {{-- @if (Session::has('success'))
        <script>
            iziToast.success({
                title: 'Caution',
                message: `{{ Session::get('success') }}`,
                position: 'topRight',
                color: '#ffffff',

            });
        </script>
    @endif --}}

    {{-- @if (Session::has('error'))
        <script>
            iziToast.success({
                title: 'Caution',
                message: `{{ Session::get('error') }}`,
                position: 'topRight',
                color: '#ffffff',
            });
        </script>
    @endif --}}

@endsection
