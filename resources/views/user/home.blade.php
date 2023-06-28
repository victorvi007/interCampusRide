@extends('user.layout.app')
@section('content')


<div class="screen w-full ">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8  m-4 md:mx-8">


        @foreach ($rides as $ride)

        <div class="card my-4 pb-6">
            <div class="h-40 w-full"style="background-image:url('{{ $ride->banner }}'); background-size:cover;background-repeat:no-repeat" ></div>
            <div class="title flex justify-between px-4 mt-4">
                <div class="flex">
                    <img src="assets/images/user-image.jpg" class="h-16 rounded-full w-16 rounded-full m-1" alt="">
                    <p class="my-auto font-bold text-sm">{{ $ride->user->firstname}} {{ $ride->user->lastname}}</p>
                </div>
                <div class="my-auto">
                    <p>2hr:30m</p>
                </div>
            </div>
            <div class="time flex justify-between my-4  px-4">
                <div class="take-off-time">
                    <h4 class="font-bold text-xl">{{ $ride->hour }}:{{ $ride->minuite }}</h4>
                    <p class=" text-xs font-semibold">UNEC</p>
                </div>

                <div class="path relative  w-2/3 rounded-full h-1 my-auto bg-primary/[.1]" style="">
                <i class="car fa-solid fa-car-side"></i>
            </div>
                <div class="arrival-time">
                    <h4 class="font-bold text-xl">{{ $ride->hour }}:{{ $ride->minuite }}</h4>
                    <p class=" text-xs font-semibold text-end">UNN</p>
                </div>
            </div>
            <div class="seats flex justify-between my-4 px-4">
                <div class="text-start">

                    <p class="my-auto font-bold text-xl">seats</p>
                    <p class="my-auto font-semibold text-xs">{{ $ride->seat_total }}</p>
                </div>
                <div class="my-auto text-end">

                    <p class="font-bold text-xl"> Available</p>
                    <p class="font-semibold text-xs">{{ $ride->seat_available }}</p>
                </div>
            </div>
            <div class="flex justify-between my-4 px-4">
                <div class="flex">


                </div>
                <div class="my-auto font-bold text-xl">

                    <p>₦{{ $ride->price }}</p>
                </div>
            </div>
            <div class="px-4">
                <a class="block text-center bg-primary  py-4 rounded text-light font-bold" ">Book</a>
            </div>
        </div>
        @endforeach



        {{-- <div class="card my-4 pb-6">
            <div class="h-40 w-full"style="background-image:url('assets/images/background.jpg'); background-size:cover;background-repeat:no-repeat" ></div>
            <div class="title flex justify-between px-4 mt-4">
                <div class="flex">
                    <img src="https://source.unsplash.com/random/200x200?sig=1" class="h-16 rounded-full w-16 rounded-full m-1" alt="">
                    <p class="my-auto font-bold text-sm">Driver Deo</p>
                </div>
                <div class="my-auto">
                    <p>2hr:30m</p>
                </div>
            </div>
            <div class="time flex justify-between my-4  px-4">
                <div class="take-off-time">
                    <h4 class="font-bold text-xl">7:25</h4>
                    <p class=" text-xs font-semibold">UNEC</p>
                </div>

                <div class="path relative  w-2/3 rounded-full h-1 my-auto bg-primary/[.1]" style="">
                <i class="car fa-solid fa-car-side"></i>
            </div>
                <div class="arrival-time">
                    <h4 class="font-bold text-xl">8:45</h4>
                    <p class=" text-xs font-semibold text-end">UNN</p>
                </div>
            </div>
            <div class="seats flex justify-between my-4 px-4">
                <div class="text-start">

                    <p class="my-auto font-bold text-xl">seats</p>
                    <p class="my-auto font-semibold text-xs">4</p>
                </div>
                <div class="my-auto text-end">

                    <p class="font-bold text-xl"> Available</p>
                    <p class="font-semibold text-xs"> 2</p>
                </div>
            </div>
            <div class="flex justify-between my-4 px-4">
                <div class="flex">


                </div>
                <div class="my-auto font-bold text-xl">

                    <p>₦5,000</p>
                </div>
            </div>
            <div class="px-4">
                <a class="block text-center bg-primary  py-4 rounded text-light font-bold" ">CHECK</a>
            </div>
        </div>

        <div class="card my-4 pb-6">
            <div class="h-40 w-full"style="background-image:url('assets/images/background.jpg'); background-size:cover;background-repeat:no-repeat" ></div>
            <div class="title flex justify-between px-4 mt-4">
                <div class="flex">
                    <img src="https://picsum.photos/600/600" class="h-16 rounded-full w-16 rounded-full m-1" alt="">
                    <p class="my-auto font-bold text-sm">Driver Deo</p>
                </div>
                <div class="my-auto">
                    <p>2hr:30m</p>
                </div>
            </div>
            <div class="time flex justify-between my-4  px-4">
                <div class="take-off-time">
                    <h4 class="font-bold text-xl">7:25</h4>
                    <p class=" text-xs font-semibold">UNEC</p>
                </div>

                <div class="path relative  w-2/3 rounded-full h-1 my-auto bg-primary/[.1]" style="">
                <i class="car fa-solid fa-car-side"></i>
            </div>
                <div class="arrival-time">
                    <h4 class="font-bold text-xl">8:45</h4>
                    <p class=" text-xs font-semibold text-end">UNN</p>
                </div>
            </div>
            <div class="seats flex justify-between my-4 px-4">
                <div class="text-start">

                    <p class="my-auto font-bold text-xl">seats</p>
                    <p class="my-auto font-semibold text-xs">4</p>
                </div>
                <div class="my-auto text-end">

                    <p class="font-bold text-xl"> Available</p>
                    <p class="font-semibold text-xs"> 2</p>
                </div>
            </div>
            <div class="flex justify-between my-4 px-4">
                <div class="flex">


                </div>
                <div class="my-auto font-bold text-xl">

                    <p>₦5,000</p>
                </div>
            </div>
            <div class="px-4">
                <a class="block text-center bg-primary  py-4 rounded text-light font-bold" ">CHECK</a>
            </div>
        </div> --}}


    </div>
</div>
@endsection
