@extends('user.layout.app')
@section('content')
<form class="" action="{{ route('store_booking') }}" method="POST">
    @csrf
    <input type="hidden" name="ride_id" value="{{ $ride->ride_id }}" id="ride_id">
    <input type="hidden" name="fee" value="{{ $ride->price }}" id="fee">

    <div class="screen w-full ">
        <div class="h-52 w-full"style="background-image:url('{{ $ride->banner }}'); background-size:cover;background-repeat:no-repeat" ></div>

        <div class="grid grid-cols-1 md:grid-cols-5 lg:grid-cols-5 gap-4  m-4 md:mx-8">



            <div class="card p-4 col-span-3 md:col-span-1 order-3 md:order-1">
                <h1 class="text-center text-2xl font-bold my-4">Driver Details</h1>
                <div class="profile order my-4">
                    <div class="">
                        <img src="{{ $ride->user->avater }}" class="h-42  w-42 m-1" alt="">
                        <h2 class="my-auto  text-2xl"> <i class="fa-light fa-signature mx-2 text-primary"></i>{{ $ride->user->firstname }} {{ $ride->lastname }}</h2>
                        <p class="my-2"> <i class="fa-solid fa-phone-rotary mx-2 text-primary"></i> +234 812 0844 654</p>
                        <p class="my-2"> <i class="fa-sharp fa-solid fa-location-dot mx-2 text-primary"></i> {{ $ride->user->address }}</p>
                        <p class="my-2"> <i class="fa-light fa-id-badge mx-2 text-primary"></i> {{ $ride->user->reg_number }}</p>
                        <p class="my-2"> <i class="fa-solid fa-school mx-2 text-primary"></i> {{ $ride->user->faculty }}</p>
                        <p class="my-2"> <i class="fa-solid fa-building mx-2 text-primary"></i> {{ $ride->user->department }}</p>
                        <p class="text-yellow">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <i class="fa-thin fa-star"></i>
                        </p>
                    </div>
                </div>

            </div>
            <div class="card col-span-3 order order-1 md:order-2">

                    <div class="title flex justify-between px-4 mt-4">
                        <div class="flex">
                            <img src="{{ $ride->user->avater }}" class="h-16 rounded-full w-16 rounded-full m-1" alt="">
                            <p class="my-auto font-bold text-sm">{{ $ride->user->firstname }} {{ $ride->lastname }}</p>
                        </div>
                        <div class="my-auto">
                            <p id="countDown-{{ $ride->id }}"></p>
                        </div>
                    </div>
                    <div class="title flex justify-between px-4 mt-4">
                        <div class="flex">
                            {{-- <img src="{{ $ride->user->avater }}" class="h-16 rounded-full w-16 rounded-full m-1" alt="">
                            <p class="my-auto font-bold text-sm">{{ $ride->user->firstname }} {{ $ride->lastname }}</p> --}}
                        </div>
                        <div class="my-auto">
                            <p class="my-auto font-bold text-sm">{{ $ride->day }} {{ $ride->month }} {{ $ride->year }}</p>
                        </div>
                    </div>
                    <div class="time flex justify-between my-4  px-4">
                        <div class="take-off-time">
                            <h4 class="font-bold text-xl">{{ $ride->depature_hour }}:{{ $ride->depature_minuite }}:<span
                                class="text-xs font-semibold">{{ $ride->depature_meridiem }}</span></h4>
                            <p class=" text-xs font-semibold">{{ $ride->from }}</p>
                        </div>

                        <div class="path relative  w-2/3 rounded-full h-1 my-auto bg-primary/[.1]" style="">
                        <i class="car fa-solid fa-car-side"></i>

                    </div>
                        <div class="arrival-time">
                            <h4 class="font-bold text-xl">{{ $ride->eta_hour }}:{{ $ride->eta_minuite }}:<span
                                class="text-xs font-semibold">{{ $ride->eta_meridiem }}</span></h4>
                            <p class=" text-xs font-semibold text-end">{{ $ride->to }}</p>
                        </div>
                    </div>
                    <div class="seats flex justify-between my-4 px-4">
                        <div class="text-start">

                            <p class="my-auto font-bold text-xl">seats</p>
                            <p class="my-auto font-semibold text-md">{{ $ride->seat_total }}</p>
                        </div>
                        <div class="my-auto text-end">

                            <p class="font-bold text-xl"> Available</p>
                            <p class="font-semibold text-md"> {{ $ride->seat_available }}</p>
                        </div>
                    </div>

                    <div class="text-center my-6 px-4" id="seats">
                        <h2 class="text-lg my-4 font-bold">Select a seating position</h2>
                        <div class="grid grid-cols-2 w-full md:w-1/4 mx-auto ">
                            <label for="seat-1" class="block p-3 w-10 rounded text-light cursor-pointer bg-primary/[.6] m-2 mx-auto">1</label>
                            <input type="radio" name="seat_id" id="seat-1" class="seat hidden " value="1">
                            <label for="seat-2" class="block p-3 w-10 rounded text-light cursor-pointer bg-primary m-2 mx-auto">2</label>
                            <input type="radio" name="seat_id" id="seat-2" class="seat hidden " value="2">

                        </div>
                        <div class="grid grid-cols-3 w-full md:w-1/4 mx-auto ">
                            <label for="seat-3" class="block p-3 w-10 rounded text-light cursor-pointer bg-primary m-2 mx-auto">3</label>
                            <input type="radio" name="seat_id" id="seat-3" class="seat hidden " value="3">
                            <label for="seat-4" class="block p-3 w-10 rounded text-light cursor-pointer bg-primary m-2 mx-auto">4</label>
                            <input type="radio" name="seat_id" id="seat-4" class="seat hidden " value="4">
                            <label for="seat-5" class="block p-3 w-10 rounded text-light cursor-pointer bg-primary m-2 mx-auto">5</label>
                            <input type="radio" name="seat_id" id="seat-5" class="seat hidden " value="5">
                        </div>
                        <div class="grid grid-cols-3 w-full md:w-1/4 mx-auto ">
                            <label for="seat-6" class="block p-3 w-10 rounded text-light cursor-pointer bg-primary m-2 mx-auto">6</label>
                            <input type="radio" name="seat_id" id="seat-6" class="seat hidden " value="6">
                            <label for="seat-7" class="block p-3 w-10 rounded text-light cursor-pointer bg-primary m-2 mx-auto">7</label>
                            <input type="radio" name="seat_id" id="seat-7" class="seat hidden " value="7">
                            <label for="seat-8" class="block p-3 w-10 rounded text-light cursor-pointer bg-primary m-2 mx-auto">8</label>
                            <input type="radio" name="seat_id" id="seat-8" class="seat hidden " value="8">
                        </div>
                    </div>
                    <div class="car-details my-8 px-4 text-center">
                        <h3 class="text-lg my-4 font-bold">Car Details</h3>
                        <div class="grid  grid-cols-1 md:grid-cols-3">
                            <div class="btn-views" >
                                View Car:  <button type="button" id="showCarImage" class="bg-primary text-light px-2 rounded hover:bg-primary/[.9]">view</button>
                            </div>
                            <div class="btn-views">
                                Car  particulars:  <button type="button" id="carParticulars" class="bg-primary text-light px-2 rounded hover:bg-primary/[.9]">view</button>
                            </div>
                            <div class="btn-views">
                                View Car:  <button type="button" class="bg-primary text-light px-2 rounded hover:bg-primary/[.9]">view</button>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 my-8">
                        <button class=" text-center w-full bg-primary  py-4 rounded text-light font-bold" id="submitBtn">Book</button>
                    </div>
            </div>
            <div class=" col-span-3 md:col-span-1 p-4 order order-2 md:order-3 card">
                <div class="text-center py-6">
                    <h2 class="font-md">
                        <span class="block font-bold">Price: </span>
                        <p class="text-4xl font-bold">₦ {{ number_format($ride->price) }} </p>
                    </h2>
                    <div class="my-4">
                        <span class="block font-bold">Note: </span>
                        <p>
                            {{ $ride->info }}
                        </p>
                     </div>
                </div>
                <div class="">
                    <h1 class="text-center text-lg my-4 font-bold">Pyment method</h1>
                </div>
                <div class="flex items-center mb-4">
                    <input id="default-radio-1" type="radio" value="off" name="payment_method" class="payment_method w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pay on Pickup</label>
                </div>
                <div class="flex items-center">
                    <input id="default-radio-2" type="radio" value="on" name="payment_method" class="payment_method w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 dark:focus:ring-blue-600 dark:ring-offset-gray-800  dark:border-gray-600">
                    <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pay Now</label>
                </div>
            </div>






        </div>
    </div>

    @include('user.partials.viewCar')
    @include('user.partials.viewParticulars')



</form>

            @push('timer-scripts')
            <script>
                var countDownDate = new Date("<?php echo "$ride->countdown"; ?>").getTime();


                setInterval(function() {
                    var now = new Date().getTime();

                    // Find the distance between now an the count down date
                    var distance = countDownDate - now;

                    // Time calculations for days, hours, minutes and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    document.getElementById("countDown-<?php echo "$ride->id"; ?>").innerHTML = `${hours}h:${minutes}m:${seconds}s`;


                }, 1000);


            </script>
            @endpush

              <script>
                // console.log( $("#seats .seat").val());
        $(document).ready(function() {
            let seats = document.querySelectorAll('.seat');
            let paymentMethods = document.querySelectorAll('.payment_method');
            let seatValue = "";
            let paymentMethodValue = "";
            seats.forEach(seat=>{
                seat.addEventListener('change',()=>{
                        seatValue = seat.value;
                    })
            })

            paymentMethods.forEach(paymentMethod=>{
                paymentMethod.addEventListener('change',()=>{
                    paymentMethodValue = paymentMethod.value;
                    console.log(paymentMethodValue);
                    })
            })


            $("#submitBtn").click(function(e) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                e.preventDefault();
                var ride_id = $("#ride_id").val();
                var payment_method = paymentMethodValue;
                let seat = seatValue;
                var fee = $("#fee").val();






                $.ajax({
                    url: '{{ route('store_booking') }}',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        ride_id: ride_id,
                        payment_method: payment_method,
                        seat_id:seat,
                        fee:fee
                    },

                    success: function(data) {
                        // console.log(data);


                        if (data.status == 'error') {

                            if (data[0]['payment_method'] != null) {
                                iziToast.error({
                                    message: data[0]['email'][0],
                                    position: 'topCenter',
                                    color: '#dc3545',
                                    messageColor: '#fff',
                                    theme: 'dark',
                                });
                            }
                            if (data[0]['seat_id'] != null) {
                                iziToast.error({
                                    message: data[0]['seat_id'][0],
                                    position: 'topCenter',
                                    color: '#dc3545',
                                    messageColor: '#fff',
                                    theme: 'dark',
                                });
                            }
                        }
                        if (data.status == 'success') {
                            iziToast.success({
                                message: data['msg'],
                                position: 'topCenter',
                                color: '#198754',
                                messageColor: '#fff',
                                theme: 'dark',
                            });

                            setInterval(() => {
                                window.location.replace(data['next'])
                            }, 3000);
                        }

                        if (data.status == 'warning') {
                            iziToast.error({
                                message: data['msg'],
                                position: 'topCenter',
                                color: '#dc3545',
                                messageColor: '#fff',
                                theme: 'dark',
                            });


                        }








                    },


                });

            });


        });
    </script>
@endsection
