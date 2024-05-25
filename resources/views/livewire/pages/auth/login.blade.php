<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
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

    <form wire:submit="resetPassword">
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
                                    <p>Create new password!</p>
                                </div>
                                <p></p>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-6" class="email_box">
                                    <x-text-input wire:model="email" id="email" class="box1signin" type="email" placeholder="Email" name="email" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="col-2"></div>
                                <div class="col-2"></div>
                                <div class="col-2"></div>
                                <div class="col-6">
                                    <x-input-label for="password" :value="__('')" />
                                    <x-text-input wire:model="password" id="password" class="box2signin" type="password" name="password" placeholder="Password" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="col-2 box_eye">
                                    <i class="fa-regular fa-eye"onclick="togglePasswordVisibility(this)"></i>
                                </div>
                                <div class="col-2"></div>
                                <div class="col-2"></div>
                                <div class="col-6">
                                    <x-input-label for="password_confirmation" :value="__('')" />
                                    <x-text-input wire:model="password_confirmation" id="password_confirmation" class="box2signin" placeholder="Confirm Password" 
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                                <div class="col-2 box_eye">
                                    <i class="fa-regular fa-eye"onclick="togglePasswordVisibility(this)"></i>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <button class="buttonsignin">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div class="col-4"></div>
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
        <script src="{{asset('frontend/js/login.js')}}"></script>
    </form>
</div>
