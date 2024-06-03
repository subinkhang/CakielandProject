<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    public string $currentError = '';
    // public $currentError = null;
    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);
        $this->currentError = 'name';

        $validated['password'] = Hash::make($validated['password']);

        // $this->showErrors = true;

        event(new Registered($user = User::create($validated)));
        // $this->redirect()->intended(route('verify-email', absolute: false));
        Auth::login($user);
        $this->redirect('/login');
        // $this->redirectIntended(default: route('verify-email', absolute: false), navigate: true);

        $this->redirect(route('dashboard', absolute: false), navigate: true);

        
    }
    public function updated($field)
{
    if ($this->currentError === $field && $errors->has($field)) {
        // Nếu lỗi hiện tại đã được sửa, chuyển sang lỗi tiếp theo
        // Ví dụ: nếu $currentError là 'name' và lỗi 'name' đã được sửa, cập nhật $currentError thành 'email'
        $this->currentError = 'email'; // Cập nhật thành trường nhập liệu tiếp theo cần kiểm tra
    }
}
}; ?>

<div>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</title>
        <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/signup.css') }}">
    </head>
    <form wire:submit="register">
        @csrf
        <!-- Name -->
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
                                    {{-- <div> --}}
                                        <x-input-label for="name" :value="__()" />
                                        <x-text-input wire:model="name" id="name" class="box1signup" type="text" name="name" placeholder="Full name" required autofocus autocomplete="name" />
                                        {{-- @if ($errors->has('name'))
                                            <div class="mt-2 text-red-600">
                                            @foreach ($errors->get('name') as $message)
                                                <p>{{ $message }}</p>
                                        @endforeach
                                        </div>
                                        @endif --}}
                                    {{-- </div> --}}
                                </div>
                                <div class="col-2"></div>
                                <div class="col-2"></div>
                                <div class="col-8">
                                    {{-- <input type="text" placeholder="Email/Phone number" class="box2signup"> --}}
                                    {{-- <div class="mt-4"> --}}
                                        <x-input-label for="email" :value="__()" />
                                        <x-text-input wire:model="email" id="email" class="box2signup" type="email" name="email" placeholder="Email" required autocomplete="username" />
                                        {{-- @if ($errors->has('email'))
                                            <div class="mt-2 text-red-600">
                                                @foreach ($errors->get('email') as $message)
                                                    <p>{{ $message }}</p>
                                                @endforeach
                                            </div>
                                        @endif --}}
                                    {{-- </div> --}}
                                </div>
                                <div class="col-2"></div>
                                <div class="col-2"></div>
                                <div class="col-6">
                                    {{-- <input type="text" placeholder="Password" class="box3signup"> --}}
                                    {{-- <div class="mt-4"> --}}
                                        <x-input-label for="password" :value="__()" />
                            
                                        <x-text-input wire:model="password" id="password" class="box3signup"
                                                        type="password"
                                                        name="password"
                                                        placeholder="Password"
                                                        required autocomplete="new-password" />
                                        {{-- @if ($errors->has('password'))
                                            <div class="mt-2 text-red-600">
                                                @foreach ($errors->get('password') as $message)
                                                    <p>{{ $message }}</p>
                                                @endforeach
                                            </div>
                                        @endif --}}
                                        
                                    {{-- </div> --}}
                                </div>
                                <div class="col-2 box_eye">
                                    <i class="fa-regular fa-eye"onclick="togglePasswordVisibility(this)"></i></div>
                                <div class="col-2"></div>
                                <div class="col-2"></div>
                                <div class="col-6">
                                    {{-- <input type="text" placeholder="Password" class="box3signup"> --}}
                                    {{-- <div class="mt-4"> --}}
                                        <x-input-label for="password_confirmation" :value="__()" />
                            
                                        <x-text-input wire:model="password_confirmation" id="password_confirmation" class="box4signup"
                                                        type="password"
                                                        name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password" />
                                        <x-input-error :messages="$errors->get($currentError)" class="mt-2" />
                                        {{-- <x-input-error :messages="$errors->get($currentError)" class="mt-2" />
                                        <x-input-error :messages="$errors->get($currentError)" class="mt-2" />
                                        <x-input-error :messages="$errors->get($currentError)" class="mt-2" /> --}}
                                    {{-- </div> --}}
                                </div>
                               
                                <div class="col-2 box_eye">
                                    <i class="fa-regular fa-eye" onclick="togglePasswordVisibility(this)"></i></div>
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
                                        {{ __('Have an account? Sign in now!') }}
                                    </a>
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-6 img_signup">
                        <img src="{{ asset('frontend/images/sign-in-up/a85174c75e3e6730400cd94d739dbfb6.jpg') }}"
                        alt="" class="w-100">
                    </div>
                </div>
            </div>
        </body>
        {{-- <script src="{{asset('frontend/js/signup.js')}}"></script> --}}
    </form>
</div>