<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.auth', ['title' => 'Login'])] class extends Component
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

<form class="form w-100" wire:submit="login">
    <div class="text-center mb-11">
        <h1 class="text-gray-900 fw-bolder mb-3">Welcome back</h1>
        <div class="text-gray-500 fw-semibold fs-6">Login to your account</div>
    </div>

    <div class="fv-row mb-8">
        <x-input type="email" wire:model="form.email" placeholder="Email Address" />
        <x-input.error key="form.email"  />
        <x-input.error key="email"  />
    </div>
    
    <div class="fv-row mb-3">
        <x-input.password wire:model="form.password" placeholder="Password" />
        <x-input.error key="form.password"  />
    </div>

    <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
        <div></div>
        <a href="authentication/layouts/corporate/reset-password.html" class="link-primary">Forgot Password ?</a>
    </div>

    <div class="d-grid mb-10">
        <x-button class="btn-primary" wire:loading wire:target="login" >Login</x-button>
    </div>

    {{-- <div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet? 
    <a href="authentication/layouts/corporate/sign-up.html" class="link-primary">Sign up</a></div> --}}
</form>
