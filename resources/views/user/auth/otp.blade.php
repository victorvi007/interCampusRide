@extends('user.layout.auth')
@section('content')
<div class="">
    <div class="flex h-screen border border-primary">
        <div class="left hidden md:flex lg:flex bg-primary h-full w-1/2  items-center justify-center  overflow-hidden">
            <!-- <div class="w-2/3 h-2/3 border flex items-center justify-center" style="background-image:url('/assets/images/banner.svg');background-size: contain; background-repeat: no-repeat;"></div> -->
            <img src="/assets/images/banner3.png" alt="">
        </div>
        <div class="right flex h-full w-full md:w-1/2 justify-center items-center overflow-y-scroll py-10">
           <div class="w-full mx-2 md:w-2/3">
            <h1 class="text-5xl m-5 text-center font-extrabold">Verify Email</h1>
            <form  action="{{ route('otp_submit') }}" method="POST">
                @csrf
                {{-- <div class="text-center">Enter the 5-digit code sent to *************@gmail.com</div> --}}
                  <h1>{{ $otp }}</h1>
                <div class="text-center text">Enter the 5-digit code sent to <span class="text-primary font-extrabold">{{ auth()->user()->email }}</span></div>
                    <div class="flex justify-between items-center ">

                        <div class="my-4 border border-primary rounded-md  w-16 h-16  px-1">
                            <input type="text" name="otp1" id="otp1" placeholder="" maxlength="1" required value="" class="text-center w-full h-full  mr-0 outline-0">
                        </div>
                        <div class="my-4 border border-primary rounded-md  w-16 h-16  px-1">
                            <input type="text" name="otp2" id="otp1" placeholder="" maxlength="1" required value="" class="text-center w-full h-full  mr-0 outline-0">
                        </div>
                        <div class="my-4 border border-primary rounded-md  w-16 h-16  px-1">
                            <input type="text" name="otp3" id="otp1" placeholder="" maxlength="1" required value="" class="text-center w-full h-full  mr-0 outline-0">
                        </div>
                        <div class="my-4 border border-primary rounded-md  w-16 h-16  px-1">
                            <input type="text" name="otp4" id="otp1" placeholder="" maxlength="1" required value="" class="text-center w-full h-full  mr-0 outline-0">
                        </div>
                        <div class="my-4 border border-primary rounded-md  w-16 h-16  px-1">
                            <input type="text" name="otp5" id="otp1" placeholder="" maxlength="1" required value="" class="text-center w-full h-full  mr-0 outline-0">
                        </div>

                    </div>



                    <div class="my-4 text-end ">
                        <button class="text-light bg-primary p-4 rounded-md w-full">Submit</button>
                    </div>
            </form>
                <form class="">
                    Didn't recieve any code? <button  class="text-primary underline ">Resend</button>
                </form>
           </div>
        </div>
    </div>
</div>



@endsection
