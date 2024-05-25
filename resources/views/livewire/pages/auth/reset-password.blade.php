<?php

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    #[Locked]
    public string $token = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Mount the component.
     */
    public function mount(string $token): void
    {
        $this->token = $token;

        $this->email = request()->string('email');
    }

    /**
     * Reset the password for the given user.
     */
    public function resetPassword(): void
    {
        $this->validate([
            'token' => ['required'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset(
            $this->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) {
                $user->forceFill([
                    'password' => Hash::make($this->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        if ($status != Password::PASSWORD_RESET) {
            $this->addError('email', __($status));

            return;
        }

        Session::flash('status', __($status));

        $this->redirectRoute('login', navigate: true);
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

    <form wire:submit="resetPassword">
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-6 formsignin">
                        <form action="" onsubmit="checkPasswordLength()">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-8 headingsignin">
                                    <h2>RESET PASSWORD</h2>
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
                                        {{ __('Reset') }}
                                    </button>
                                </div>
                                <div class="col-4"></div>
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
        <script src="{{asset('frontend/js/login.js')}}"></script>
    </form>
</div>
