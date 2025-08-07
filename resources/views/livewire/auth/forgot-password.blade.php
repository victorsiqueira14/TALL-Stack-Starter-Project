<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Forgot password')" :description="__('Enter your email to receive a password reset link')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="sendPasswordResetLink" class="flex flex-col gap-6">
        <!-- Email Address -->
        <x-ui.form-field>
            <x-ui.label for="email">{{ __('Email Address') }}</x-ui.label>
            <x-ui.input type="email" id="email" wire:model="email" required autofocus placeholder="email@example.com" />
        </x-ui.form-field>

        <x-ui.button type="submit" class="w-full">
            {{ __('Email password reset link') }}
        </x-ui.button>
    </form>

    <div class="space-x-1 text-center text-sm text-muted-foreground rtl:space-x-reverse">
        {{ __('Or, return to') }}
        <a href="{{ route('login') }}"
            class="text-primary hover:text-primary/80"
            wire:navigate>
            {{ __('log in') }}
        </a>
    </div>
</div>
