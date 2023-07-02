@extends('user.layout.auth')
@section('content')
    <div class="">
        {{-- @csrf --}}
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
                        <input type="email" name="email" id="email" placeholder="Email"
                            class=" w-full h-14 mx-2 mr-0 outline-0">
                    </div>
                    <div class="my-4 border border-primary rounded-md flex px-2 ">
                        <label for="password" class="h-full my-auto"> <i class="fa-solid fa-lock text-primary"></i> </label>
                        <input type="password" name="password" id="password" placeholder="Password"
                            class="w-full h-14 mx-2  outline-0 ">
                    </div>


                    <div class="my-4 flex items-center">
                        <input type="checkbox" name="remember_me" id="rememberMe" class="h-4 w-4 mr-2">
                        <label for="rememberMe">Remember Me</label>
                    </div>
                    <div class="my-4 text-end ">
                        <button id="submitBtn" class="text-light bg-primary p-4 rounded-md w-full" id="submit">Sign In</button>
                    </div>
                    <div class="">
                        Don't have an account? <a href="{{ route('register') }}" class="text-primary underline ">Sign Up here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $("#submitBtn").click(function(e) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                e.preventDefault();
                var email = $("#email").val();
                var password = $("#password").val();
                var rememberMe = $("#rememberMe").val();

                $.ajax({
                    url: '{{ route('store_login') }}',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        email: email,
                        password: password,
                        remember_me:rememberMe
                    },

                    success: function(data) {
                        console.log(data);


                        if (data.status == 'error') {

                            if (data[0]['email'] != null) {
                                iziToast.error({
                                    message: data[0]['email'][0],
                                    position: 'topCenter',
                                    color: '#dc3545',
                                    messageColor: '#fff',
                                    theme: 'dark',
                                });
                            }
                            if (data[0]['password'] != null) {
                                iziToast.error({
                                    message: data[0]['password'][0],
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
                                window.location.replace("/")
                            }, 3000);
                        }

                        if (data.status == 'unauthorized') {
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










    {{-- @foreach ($errors->all() as $error)
        @php
            dd($error);

        @endphp
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
    @endforeach --}}

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


    @push('script')
        <script>
            $('#submit').on('keypress', function(e) {
                return e.which !== 32;
            });
        </script>
    @endpush
@endsection
