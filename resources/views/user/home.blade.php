@extends('user.layout.app')
@section('content')
    <div class="screen w-full ">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8  m-4 md:mx-8">


            @foreach ($rides as $ride)
                @if ($ride->seat_total - $ride->seat_booked > 0)
                    <div class="card my-4 pb-6">
                        <div
                            class="h-40 w-full"style="background-image:url('{{ $ride->banner }}'); background-size:cover;background-repeat:no-repeat;background-position:center">
                        </div>
                        <div class="title flex justify-between px-4 mt-4">
                            <div class="flex">
                                <img src="assets/images/user-image.jpg" class="h-16 rounded-full w-16 rounded-full m-1"
                                    alt="">
                                <p class="my-auto font-bold text-sm">{{ $ride->user->firstname }}
                                    {{ $ride->user->lastname }}
                                </p>
                            </div>
                            <div class="my-auto">

                            </div>
                        </div>
                        <div class="time flex justify-between my-4  px-4">
                            <div class="take-off-time">
                                <h4 class="font-bold text-xl">{{ $ride->depature_hour }}:{{ $ride->depature_minuite }}:<span
                                        class="text-xs font-semibold">{{ $ride->depature_meridiem }}</span> </h4>
                                <p class=" text-xs font-semibold">{{ $ride->from }}</p>
                            </div>

                            <div class="path relative  w-2/3 rounded-full h-1 my-auto bg-primary/[.1]" style="">
                                <i class="car fa-solid fa-car-side"></i>
                            </div>
                            <div class="arrival-time">
                                <h4 class="font-bold text-xl">{{ $ride->arrival_hour }}:{{ $ride->arrival_minuite }}:<span
                                        class="text-xs font-semibold">{{ $ride->arrival_meridiem }}</span></h4>
                                <p class=" text-xs font-semibold text-end">{{ $ride->to }}</p>
                            </div>
                        </div>
                        <div class="seats flex justify-between my-4 px-4">
                            <div class="text-start">

                                <p class="my-auto font-bold text-xl">seats</p>
                                <p class="my-auto font-semibold text-xs">{{ $ride->seat_total }}</p>
                            </div>
                            <div class="my-auto text-end">

                                <p class="font-bold text-xl"> Available</p>
                                <p class="font-semibold text-xs">{{ $ride->seat_total - $ride->seat_booked }}</p>
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
                            <a href="{{ route('booking', $ride->id) }}"
                                class="block text-center bg-primary  py-4 rounded text-light font-bold" ">Book</a>
                        </div>
                    </div>
                @endif
                @endforeach

        </div>
    </div>
@endsection
