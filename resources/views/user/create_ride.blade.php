@extends('user.layout.app')
@section('content')


<div class="p-6 ">
    <!-- Mini Navigation starts -->
    <div class="screen w-full bg-light p-4">
        <div class="mini-nav grid grid-cols-2 md:grid-cols-5 w-full md:w-1/2  mx-auto">
            <a href="{{ route('create_ride') }}"
                class="p-2  block border-b border-b-dark/[.1] border-b-primary w-full text-center">Create Ride</a>
            <a href=""
                class="p-2 block  border-b border-b-dark/[.1] hover:border-b-primary w-full text-center">Active Rides</a>
            <a href=""
                class="p-2 block  border-b border-b-dark/[.1] hover:border-b-primary w-full text-center">Ride Logs</a>
            <a href=""
                class="p-2 block  border-b border-b-dark/[.1] hover:border-b-primary w-full text-center">Interface</a>
            <a href=""
                class="p-2 block  border-b border-b-dark/[.1] hover:border-b-primary w-full text-center">Interface</a>
        </div>

    </div>
</div>
<!-- Mini Navigation ends -->
<div class="mx-2">
    <!-- content Starts Here -->

    <form action="{{ route('store_create_ride') }}" method="POST" enctype="multipart/form-data" class=" flex h-full  justify-center items-center  py-10">
        @csrf

        <div class="w-full  mx-2 md:w-1/2">
            <h1 class="text-5xl m-5 text-center font-extrabold">Create Ride</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">

                <div class="my-4 border border-primary rounded-md  flex  px-1">
                    <label for="from" class="h-full my-auto  flex items-center"> <i
                            class="fa-regular fa-user text-primary my-auto"></i> </label>
                    <select name="from" id="from" class="w-full h-14 outline-0 ">
                        <option value="" class="h-14 py-5 text-dark/[.5]">From</option>
                        <option value="UNEC" @if(old('from') == 'UNEC') selected @endif class="h-14 py-5">UNEC</option>
                        <option value="UNN" @if(old('from') == 'UNN') selected @endif class="h-14 py-5">UNN</option>
                    </select>
                </div>
                <div class="my-4 border border-primary rounded-md flex  px-1">
                    <label for="to" class="h-full my-auto flex items-center"> <i
                            class="fa-regular fa-user text-primary"></i> </label>

                    <select name="to" id="to" class="w-full h-14 outline-0 ">
                        <option value="" disabled class="h-14 py-5 block">To</option>
                        <option value="UNEC" @if(old('to') == 'UNEC') selected @endif class="h-14 py-5 block">UNEC</option>
                        <option value="UNN" @if(old('to') == 'UNN') selected @endif class="h-14 py-5 block">UNN</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">

                <div class="my-4 border border-primary rounded-md  grid grid-cols-1 px-1">

                    <select name="month" id="to" class="h-14 outline-0 text-center">
                        <option value="" class="h-14 py-5 block">Month</option>

                        <option value="January" @if(old('month') == 'January') selected @endif class="h-14 py-5 block"> January </option>
                        <option value="February" @if(old('month') == 'February') selected @endif class="h-14 py-5 block"> February </option>
                        <option value="March" @if(old('month') == 'March') selected @endif class="h-14 py-5 block"> March </option>
                        <option value="April" @if(old('month') == 'April') selected @endif class="h-14 py-5 block"> April </option>
                        <option value="May" @if(old('month') == 'May') selected @endif class="h-14 py-5 block"> May </option>
                        <option value="June" @if(old('month') == 'June') selected @endif class="h-14 py-5 block"> June </option>
                        <option value="July" @if(old('month') == 'July') selected @endif class="h-14 py-5 block"> July </option>
                        <option value="August" @if(old('month') == 'August') selected @endif class="h-14 py-5 block"> August </option>
                        <option value="September" @if(old('month') == 'September') selected @endif class="h-14 py-5 block"> September </option>
                        <option value="October" @if(old('month') == 'October') selected @endif class="h-14 py-5 block"> October </option>
                        <option value="November" @if(old('month') == 'November') selected @endif class="h-14 py-5 block"> November </option>
                        <option value="December" @if(old('month') == 'December') selected @endif class="h-14 py-5 block"> December </option>

                    </select>


                </div>


                <div class="my-4 border border-primary rounded-md  grid grid-cols-1 px-1">

                    <select name="day" id="to" class="h-14 outline-0 text-center">
                        <option value="" class="h-14 py-5 block">Day</option>
                        @for ($x = 0; $x<=31; $x++)
                        <option value="{{ ($x <10 )?'0'.$x : $x }}" @if(old('day') == $x) selected @endif class="h-14 py-5 block">{{ ($x <10 )?'0'.$x : $x }}</option>
                        @endfor
                    </select>


                </div>
                <div class="my-4 border border-primary rounded-md  grid grid-cols-3 px-1">

                    <select name="depature_hour" id="depature_hour" class="h-14 outline-0 text-center">
                        <option value="" class="h-14 py-5 block">Hour</option>
                        @for ($x = 0; $x<=12; $x++)
                        <option value="{{ ($x <10 )?'0'.$x : $x }}" @if(old('depature_hour') == $x) selected @endif class="h-14 py-5 block">{{ ($x <10 )?'0'.$x : $x }}</option>
                        @endfor
                    </select>
                    <select name="depature_minuite" id="depature_minuite" class="h-14 outline-0 text-center">
                        <option value="" class="h-14 py-5 block">Minuite</option>
                        @for ($x = 0; $x<=60; $x++)
                        <option value="{{ ($x <10 )?'0'.$x : $x }}" @if(old('depature_minuite') == $x) selected @endif class="h-14 py-5 block">{{ ($x <10 )?'0'.$x : $x }}</option>
                        @endfor
                    </select>
                    <select name="depature_meridiem" id="depature_meridiem" class="h-14 outline-0 text-center">
                        <option value="AM" @if(old('depature_meridiem') == 'AM') selected @endif class="h-14 py-5 block">AM</option>
                        <option value="PM" @if(old('depature_meridiem') == 'PM') selected @endif class="h-14 py-5 block">PM</option>
                    </select>

                </div>
                <div class="my-4 border border-primary rounded-md  grid grid-cols-3 px-1">

                    <select name="arrival_hour" id="to" class="h-14 outline-0 text-center">
                        <option value="" class="h-14 py-5 block">Hour</option>
                        @for ($x = 0; $x<=12; $x++)
                        <option value="{{ ($x <10 )?'0'.$x : $x }}" @if(old('arrival_hour') == $x) selected @endif class="h-14 py-5 block">{{ ($x <10 )?'0'.$x : $x }}</option>
                        @endfor
                    </select>
                    <select name="arrival_minuite" id="to" class="h-14 outline-0 text-center">
                        <option value="" class="h-14 py-5 block">Minuite</option>
                        @for ($x = 0; $x<=60; $x++)
                        <option value="{{ ($x <10 )?'0'.$x : $x }}" @if(old('arrival_minuite') == $x) selected @endif class="h-14 py-5 block">{{ ($x <10 )?'0'.$x : $x }}</option>
                        @endfor
                    </select>
                    <select name="arrival_meridiem" id="arrival_meridiem" class="h-14 outline-0 text-center">
                        <option value="AM" @if(old('arrival_meridiem') == 'AM') selected @endif class="h-14 py-5 block">AM</option>
                        <option value="PM" @if(old('arrival_meridiem') == 'PM') selected @endif class="h-14 py-5 block">PM</option>
                    </select>

                </div>

            </div>

            <div class="grid grid-cols-2 gap-2">

                <div class="my-4 border border-primary rounded-md flex px-2 ">
                    <label for="price" class="h-full my-auto flex items-center"> <i
                            class="fa-solid fa-naira-sign text-primary"></i> </label>
                    <input type="number" name="price" id="price" value="{{ old('price') }}" placeholder="Price" class="w-full h-14 mx-2  outline-0 ">
                </div>

            <div class="flex justify-end">

                <div class="my-4 border border-primary rounded-md flex px-2 ">
                    <label for="seat" class="h-full my-auto flex items-center"> <i
                            class="fa-solid fa-school text-primary"></i> </label>
                    <select name="seat" id="seat" class="w-full h-14 outline-0 p-2">
                        <option value="" class="h-14 py-5 block">Seats</option>
                        <option value="1" @if(old('seat') == '1') selected @endif class="h-14 py-5 block">1</option>
                        <option value="2" @if(old('seat') == '2') selected @endif class="h-14 py-5 block">2</option>
                        <option value="3" @if(old('seat') == '3') selected @endif class="h-14 py-5 block">3</option>
                        <option value="4" @if(old('seat') == '4') selected @endif class="h-14 py-5 block">4</option>
                        <option value="5" @if(old('seat') == '5') selected @endif class="h-14 py-5 block">5</option>
                        <option value="6" @if(old('seat') == '6') selected @endif class="h-14 py-5 block">6</option>
                        <option value="7" @if(old('seat') == '7') selected @endif class="h-14 py-5 block">7</option>
                        <option value="8" @if(old('seat') == '8') selected @endif class="h-14 py-5 block">8</option>
                    </select>
                </div>

            </div>

            </div>


            <div class="grid grid-cols-1 gap-2">


            </div>


            <div class="grid grid-cols-2 gap-2">

                    <div class="flex items-center justify-center w-full">
                        <label for="car_image" class="flex flex-col items-center justify-center w-full h-64 border-2 border-primary border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-primary/[.3] dark:text-primary/[.6]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Upload image of your Car</span> </p>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="car_image" name="car_image" value="{{ old('car_image') }}" type="file" class="hidden" />
                        </label>
                    </div>


                    <div class="flex items-center justify-center w-full">
                        <label for="car_plate_number" class="flex flex-col items-center justify-center w-full h-64 border-2 border-primary border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-primary/[.3] dark:text-primary/[.6]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Upload image of your Car particulars</span> </p>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="car_plate_number" name="car_plate_number" value="{{ old('car_plate_number') }}" type="file" class="hidden" />
                        </label>
                    </div>



            </div>

            <div class="grid grid-cols-1 gap-2">
                <div class="my-4 border border-primary rounded-md flex px-2 ">

                    <textarea name="info" id=""  cols="30" placeholder="informatio for portential riders" rows="10" class="w-full  mx-2  outline-0 ">{{ old('info') }}</textarea>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-2">

                    <div class="flex items-center justify-center w-full">
                        <label for="banner" class="flex flex-col items-center justify-center w-full h-22 border-2 border-primary border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center ">
                                <svg class="w-8 h-8 mb-4 text-primary/[.3] dark:text-primary/[.6]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Upload Ad Display Image</span> </p>
                                <!-- <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p> -->
                                <!-- <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG or GIF (MAX. 800x400px)</p> -->
                            </div>
                            <input id="banner" name="banner" {{ old('banner') }} type="file" class="hidden" />
                        </label>
                    </div>



            </div>

            <div class=" my-8">
                <button type="submit" class="block text-center bg-primary w-full py-4 rounded text-light font-bold" ">Create</button>
            </div>


        </div>
    </form>
    <!-- content Ends Here -->

</div>

@endsection
