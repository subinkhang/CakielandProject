<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    /**
     * Send an email verification notification to the user.
     */
    public function sendVerification(): void
    {
        if (Auth::user()->hasVerifiedEmail()) {
            $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);

            return;
        }

        Auth::user()->sendEmailVerificationNotification();

        Session::flash('status', 'verification-link-sent');
    }

    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<div>
    <link href="{{ asset('frontend/css/verifyEmail.css') }}" rel="stylesheet">
    <div class="verification-container">
        <h1 class="verification-message">
            {{ __('Đăng ký thành công!') }}
        </h1>

        <div class="verification-message">
            {{ __('Cảm ơn bạn đã đăng ký! Trước khi bắt đầu, bạn có thể xác nhận địa chỉ email của mình bằng cách nhấp vào liên kết mà chúng tôi vừa gửi qua email cho bạn không? Nếu bạn không nhận được email, chúng tôi sẽ rất vui lòng gửi cho bạn một liên kết khác.') }}
        </div>
    
        @if (session('status') == 'verification-link-sent')
            <div class="status-message">
                {{ __('Một liên kết xác thực mới đã được gửi đến địa chỉ email mà bạn đã cung cấp khi đăng ký.') }}
            </div>
        @endif
    
        <div class="button-group">
            <x-primary-button wire:click="sendVerification" class="verification-button">
                {{ __('Gửi lại Email Xác Thực') }}
            </x-primary-button>
    
            <button wire:click="logout" type="submit" class="logout-button">
                {{ __('Đăng Xuất') }}
            </button>
        </div>
    </div>
</div>
