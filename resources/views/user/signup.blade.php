<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/signup.css') }}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 formsignup">
                <form action="">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8 headingsignup">
                            <h2>SIGN UP</h2>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-2"></div>
                        <div class="col-8 parasignup">
                            <p>Please fill your information to sign up!</p>
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            {{-- <input type="text" placeholder="Full name" class="box1signup"> --}}
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input wire:model="name" id="name" class="box1signup" type="text" name="name" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-2"></div>
                        <div class="col-8">
                            {{-- <input type="text" placeholder="Email/Phone number" class="box2signup"> --}}
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input wire:model="email" id="email" class="box2signup" type="email" name="email" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-2"></div>
                        <div class="col-6">
                            {{-- <input type="text" placeholder="Password" class="box3signup"> --}}
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />
                    
                                <x-text-input wire:model="password" id="password" class="box3signup"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                    
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>
                        
                        <div class="col-2"></div>
                        <div class="col-2"></div>
                        <div class="col-8">
                            {{-- <input type="text" placeholder="Password" class="box3signup"> --}}
                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    
                                <x-text-input wire:model="password_confirmation" id="password_confirmation" class="box4signup"
                                                type="password"
                                                name="password_confirmation" required autocomplete="new-password" />
                    
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <button class="buttonsignup">Sign up</button>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="row linksi">
                        <div class="col-2"></div>
                        <div class="col-8 linksi2">
                            {{-- <p>Have account?</p>
                            <p class="p1">Sign in now!</p> --}}
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" wire:navigate>
                                {{ __('Already registered?') }}
                            </a>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </form>
            </div>
            <div class="col-6 img_signup">
                <img src="{{ 'public/frontend/images/sign-in-up/a85174c75e3e6730400cd94d739dbfb6.jpg' }}"
                    alt="" class="w-100">
            </div>
        </div>
    </div>
</body>

</html>
