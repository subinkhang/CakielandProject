<?php

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $email = '';

    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
        ]);

        $status = Password::sendResetLink(
            $this->only('email')
        );

        if ($status != Password::RESET_LINK_SENT) {
            $this->addError('email', __($status));

            return;
        }

        $this->reset('email');

        session()->flash('status', __($status));
    }
}; ?>

<div>
    <!-- Session Status -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</title>
        <link rel="stylesheet" href="{{ 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/login.css') }}">
    </head>

    <div>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-6 formsignin">
                        <form wire:submit="sendPasswordResetLink">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-8 headingsignin">
                                    <h2>Forgot password</h2>
                                </div>
                                <div class="col-2"></div>
                                <div class="col-2"></div>
                                <div class="col-8 parasignin">
                                    <p>We'll email you a password reset link.</p>
                                </div>
                                <p></p>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-6" class="email_box">
                                    {{-- <x-input-label for="email" :value="__('Email:')" /> --}}
                                    <x-text-input wire:model="email" id="email" class="box1signin" type="email" name="email" placeholder="Email" required autofocus />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2 error" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <button class="buttonsignin">
                                        {{-- <x-primary-button> --}}
                                            {{ __('Send') }}
                                        {{-- </x-primary-button> --}}
                                    </button>
                                </div>
                            </div>
                            <x-auth-session-status class="mb-4" style="color: green" :status="session('status')" />
                        </form> 
                    </div>
                    <div class="col-6 img_signin">
                        <img src="{{ asset('frontend/images/sign-in-up/c641ce7483c4728b418ba7d5d93a9ddc.jpg') }}" alt=""
                            class="w-100 img">
                    </div>
                </div>
            </div>
        </body>
    </div>
</div>

