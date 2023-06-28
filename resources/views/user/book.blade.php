@extends('user.layout.app')
@section('content')
<div class="">

    <div class="screen w-full ">
        <div class="h-52 w-full"style="background-image:url('assets/images/background.jpg'); background-size:cover;background-repeat:no-repeat" ></div>

        <div class="grid grid-cols-1 md:grid-cols-5 lg:grid-cols-5 gap-4  m-4 md:mx-8">



            <div class="card p-4 col-span-3 md:col-span-1 order-3 md:order-1">
                <h1 class="text-center text-2xl font-bold my-4">Driver Details</h1>
                <div class="profile order my-4">
                    <div class="">
                        <img src="assets/images/user-image.jpg" class="h-42  w-42 m-1" alt="">
                        <h2 class="my-auto  text-2xl"> <i class="fa-light fa-signature mx-2 text-primary"></i>Driver Deo</h2>
                        <p class="my-2"> <i class="fa-solid fa-phone-rotary mx-2 text-primary"></i> +234 812 0844 654</p>
                        <p class="my-2"> <i class="fa-sharp fa-solid fa-location-dot mx-2 text-primary"></i> 204 Rosser Ave Waynesboro</p>
                        <p class="my-2"> <i class="fa-light fa-id-badge mx-2 text-primary"></i> 2017/123456</p>
                        <p class="my-2"> <i class="fa-solid fa-school mx-2 text-primary"></i> Enginering</p>
                        <p class="my-2"> <i class="fa-solid fa-building mx-2 text-primary"></i> Electronic Enginering</p>
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
                            <img src="assets/images/user-image.jpg" class="h-16 rounded-full w-16 rounded-full m-1" alt="">
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
                            <p class="my-auto font-semibold text-md">4</p>
                        </div>
                        <div class="my-auto text-end">

                            <p class="font-bold text-xl"> Available</p>
                            <p class="font-semibold text-md"> 2</p>
                        </div>
                    </div>

                    <div class="text-center my-6 px-4">
                        <h2 class="text-lg my-4 font-bold">Select a seating position</h2>
                        <div class="grid grid-cols-2 w-full md:w-1/4 mx-auto ">
                            <label for="seat-1" class="block p-3 w-10 rounded text-light cursor-pointer bg-primary/[.6] m-2 mx-auto">1</label>
                            <input type="radio" name="seat" id="seat-1" class="seat hidden ">
                            <label for="seat-2" class="block p-3 w-10 rounded text-light cursor-pointer bg-primary m-2 mx-auto">2</label>
                            <input type="radio" name="seat" id="seat-2" class="seat hidden ">

                        </div>
                        <div class="grid grid-cols-3 w-full md:w-1/4 mx-auto ">
                            <label for="seat-3" class="block p-3 w-10 rounded text-light cursor-pointer bg-primary m-2 mx-auto">3</label>
                            <input type="radio" name="seat" id="seat-3" class="seat hidden ">
                            <label for="seat-4" class="block p-3 w-10 rounded text-light cursor-pointer bg-primary m-2 mx-auto">4</label>
                            <input type="radio" name="seat" id="seat-4" class="seat hidden ">
                            <label for="seat-5" class="block p-3 w-10 rounded text-light cursor-pointer bg-primary m-2 mx-auto">5</label>
                            <input type="radio" name="seat" id="seat-5" class="seat hidden ">
                        </div>
                        <div class="grid grid-cols-3 w-full md:w-1/4 mx-auto ">
                            <label for="seat-6" class="block p-3 w-10 rounded text-light cursor-pointer bg-primary m-2 mx-auto">6</label>
                            <input type="radio" name="seat" id="seat-6" class="seat hidden ">
                            <label for="seat-7" class="block p-3 w-10 rounded text-light cursor-pointer bg-primary m-2 mx-auto">7</label>
                            <input type="radio" name="seat" id="seat-7" class="seat hidden ">
                            <label for="seat-8" class="block p-3 w-10 rounded text-light cursor-pointer bg-primary m-2 mx-auto">8</label>
                            <input type="radio" name="seat" id="seat-8" class="seat hidden ">
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
                        <a class="block text-center bg-primary  py-4 rounded text-light font-bold" ">Book</a>
                    </div>
            </div>
            <div class=" col-span-3 md:col-span-1 p-4 order order-2 md:order-3 card">
                <div class="text-center py-6">
                    <h2 class="font-md">
                        <span class="block font-bold">Price: </span>
                        <p class="text-4xl font-bold">₦ 5000 </p>
                    </h2>
                    <div class="my-4">
                        <span class="block font-bold">Note: </span>
                        <p>
                            The cost of the fare will be subject to adjustment if you possess luggage exceeding a weight threshold of 10 kilograms. In such instances, a modification in the fare pricing structure shall be implemented to account for the additional weight, thereby ensuring a fair and equitable distribution of costs.
                        </p>
                     </div>
                </div>
                <div class="">
                    <h1 class="text-center text-lg my-4 font-bold">Pyment method</h1>
                </div>
                <div class="flex items-center mb-4">
                    <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pay on Pickup</label>
                </div>
                <div class="flex items-center">
                    <input id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 dark:focus:ring-blue-600 dark:ring-offset-gray-800  dark:border-gray-600">
                    <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pay Now</label>
                </div>
            </div>






        </div>
    </div>

    @include('user.partials.viewCar')
    @include('user.partials.viewParticulars')



</div>
@endsection
