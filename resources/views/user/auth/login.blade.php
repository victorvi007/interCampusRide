@extends('user.layout.auth')
@section('content')

<form action="{{ route('store_login') }}" method="POST" class="">
    @csrf
    <div class="flex h-screen border border-primary">
        <div class="left hidden md:flex lg:flex bg-primary h-full w-1/2  items-center justify-center  overflow-hidden">
            <!-- <div class="w-2/3 h-2/3 border flex items-center justify-center" style="background-image:url('/assets/images/banner.svg');background-size: contain; background-repeat: no-repeat;"></div> -->
            <img src="/assets/images/banner3.png" alt="">
        </div>
        <div class="right flex h-full w-full md:w-1/2 justify-center items-center">
           <div class="w-2/3">
            <h1 class="text-5xl m-10 text-center font-extrabold">Sign In</h1>

                <div class="my-4 border border-primary rounded-md  flex px-2 ">
                    <label for="email" class="h-full my-auto "> <i class="fa-light fa-at text-primary"></i> </label>
                    <input type="email" name="email" id="email" placeholder="Email" class=" w-full h-14 mx-2 mr-0 outline-0">
                </div>
                <div class="my-4 border border-primary rounded-md flex px-2 ">
                    <label for="password" class="h-full my-auto"> <i class="fa-solid fa-lock text-primary"></i> </label>
                    <input type="password" name="password" id="password" placeholder="Password" class="w-full h-14 mx-2  outline-0 ">
                </div>


                <div class="my-4 flex items-center">
                    <input type="checkbox" name="rememberMe" id="rememberMe" class="h-4 w-4 mr-2">
                    <label for="rememberMe">Remember Me</label>
                </div>
                <div class="my-4 text-end ">
                    <button class="text-light bg-primary p-4 rounded-md w-full">Sign In</button>
                </div>
                <div class="">
                    Don't have an account? <a href="#" class="text-primary underline ">Sign Up here</a>
                </div>
           </div>
        </div>
    </div>
</form>
@endsection
