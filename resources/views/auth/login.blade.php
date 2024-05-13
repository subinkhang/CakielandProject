<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</title>
        <link rel="stylesheet" href="{{ 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/login.css') }}">
    </head>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-6 formsignin">
                        <form action="" onsubmit="checkPasswordLength()">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-8 headingsignin">
                                    <h2>WELCOME BACK</h2>
                                </div>
                                <div class="col-2"></div>
                                <div class="col-2"></div>
                                <div class="col-8 parasignin">
                                    <p>Please sign in to continue!</p>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-6" class="email_box">
                                    {{-- <input id="Email" type="text" placeholder="Email/Phone number" class="box1signin">
                                    <br> --}}
                                    {{-- <div> --}}
                                        <x-input-label for="email" :value="__()" />
                                        <x-text-input wire:model="form.email" id="email" class="box1signin" type="email" name="email" placeholder="Email"
                                            required autofocus autocomplete="username" />
                                        <x-input-error :messages="$errors->get('form.email')" class="box1signin" />
                                    {{-- </div> --}}
                                </div>
                                <div class="col-2"></div>
                                <div class="col-2"></div>
                                <div class="col-2"></div>
                                <div class="col-6">
                                    {{-- <input id="Password" type="password" placeholder="Password" class="box2signin"> --}}
                                    {{-- <div class="mt-4"> --}}
                                        <x-input-label for="password" :value="__()" />
                            
                                        <x-text-input wire:model="form.password" id="password" class="box2signin" type="password" placeholder="Password"
                                            name="password" required autocomplete="current-password" />
                            
                                        <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                                    {{-- </div> --}}
                                </div>
                                <div class="col-2 box_eye">
                                    <i class="fa-regular fa-eye"onclick="togglePasswordVisibility(this)"></i></div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <button class="buttonsignin">Login</button>
                                </div>
                                <div class="col-4"></div>
                            </div>
                            <div class="row linepw">
                                <div class="col-2"></div>
                                <div class="col-4 checksignin">
                                    {{-- <p><input type="checkbox" name="Save" id="saveLogin" onchange="saveLogin(this)"> Save
                                        Login</p> --}}
                                        
                                            <label for="remember" class="inline-flex items-center">
                                                <input wire:model="form.remember" id="remember" type="checkbox"
                                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                            </label>
                                </div>
                                <div class="col-4 getpw">
                                    {{-- <p>Forget Password</p> --}}
                                    @if (Route::has('password.request'))
                                        <a
                                            href="{{ route('password.request') }}" wire:navigate>
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="row linksu">
                                <div class="col-2"></div>
                                <div class="col-8 linksu2">
                                    {{-- <p>No account yet?</p>
                                    <a href="../Signup/signup.html" class="p2">Sign up now!</a> --}}
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('register') }}">
                                        {{ __('Register!') }}
                                    </a>
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-6 img_signin">
                        <img src="{{ asset('frontend/images/sign-in-up/c641ce7483c4728b418ba7d5d93a9ddc.jpg') }}" alt=""
                            class="w-100 img">
                    </div>
                </div>
            </div>
        </body>
        <script src="frontend/js/login.js"></script>
    </form>
</x-guest-layout>
