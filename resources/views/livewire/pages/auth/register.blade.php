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
        $validated['password'] = Hash::make($validated['password']);
        event(new Registered($user = User::create($validated)));
        Auth::login($user);
        $this->redirect(route('verification.notice'), navigate: true);

        
    }
}; 
?>
<div>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</title>
        <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/signup.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
                                        <x-input-label for="name" :value="__()" />
                                        <x-text-input wire:model="name" id="name" class="box1signup" type="text" name="name" placeholder="Full name" required autofocus autocomplete="name" />
                                        
                                    {{-- </div> --}}
                                </div>
                                <div class="col-2"></div>
                                <div class="col-2"></div>
                                <div class="col-8">
                                        <x-input-label for="email" :value="__()" />
                                        <x-text-input wire:model="email" id="email" class="box2signup" type="email" name="email" placeholder="Email" required autocomplete="username" />
                                       
                                </div>
                                <div class="col-2"></div>
                                <div class="col-2"></div>
                                <div class="col-6">
                                        <x-input-label for="password" :value="__()" />
                            
                                        <x-text-input wire:model="password" id="password" class="box3signup"
                                                        type="password"
                                                        name="password"
                                                        placeholder="Password"
                                                        required autocomplete="new-password" />
                                        
                                </div>
                                <div class="col-2 box_eye">
                                    <i class="fa-regular fa-eye" onclick="togglePasswordVisibility(this)"></i></div>
                                <div class="col-2"></div>
                                <div class="col-2"></div>
                                <div class="col-6">
                                    {{-- <input type="text" placeholder="Password" class="box3signup"> --}}
                                    {{-- <div class="mt-4"> --}}
                                        <x-input-label for="password_confirmation" :value="__()" />
                            
                                        <x-text-input wire:model="password_confirmation" id="password_confirmation" class="box4signup"
                                                        type="password"
                                                        name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password" />
                                       
                                            @foreach ($errors->get('name') as $message)
                                            <div class="error-message">{{ $message }}</div>
                                        @endforeach
                                        
                                        @foreach ($errors->get('email') as $message)
                                            <div class="error-message">{{ $message }}</div>
                                        @endforeach
                                        
                                        @foreach ($errors->get('password') as $message)
                                            <div class="error-message">{{ $message }}</div>
                                        @endforeach
                                        
                                        @foreach ($errors->get('password_confirmation') as $message)
                                            <div class="error-message">{{ $message }}</div>
                                        @endforeach
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
                                    
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" wire:navigate>
                                        {{ __('Have an account? Sign in now!') }}
                                    </a>
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-6 img_signup">
                        <img src="{{ asset('frontend\images\sign-in-up\30ea1aafa8c9aefb20bde0664e7bb4a9.jpg') }}"
                        alt="" class="w-100">
                    </div>
                </div>
            </div>
        </body>
        <script src="{{asset('frontend/js/signup.js')}}"></script>
    </form>
</div>