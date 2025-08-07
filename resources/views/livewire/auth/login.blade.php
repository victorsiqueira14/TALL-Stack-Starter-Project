<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Log in to your account')" :description="__('Enter your email and password below to log in')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="login" class="flex flex-col gap-6">
        <!-- Email -->
        <x-ui.form-field>
            <x-ui.label for="email">{{ __('Email address') }}</x-ui.label>
            <x-ui.input type="email" id="email" wire:model="email" required autocomplete="email"
                placeholder="email@example.com" />
        </x-ui.form-field>

        <div class="relative">
            <x-ui.form-field>
                <x-ui.label for="password">{{ __('Password') }}</x-ui.label>
                <div class="relative">
                    <x-ui.input type="password" id="password" wire:model="password" required autocomplete="current-password"
                        placeholder="{{ __('Password') }}" class="pr-10" />
                    <button type="button"
                        onclick="var input = document.getElementById('password'); input.type = input.type === 'password' ? 'text' : 'password';"
                        class="absolute inset-y-0 right-0 flex items-center px-3 text-muted-foreground hover:text-foreground">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </button>
                </div>
            </x-ui.form-field>

            @if (Route::has('password.request'))
                <a class="absolute end-0 top-0 text-sm text-primary hover:text-primary/80"
                    href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <!-- Remember Me -->
        <div class="flex items-center space-x-2">
            <input type="checkbox" wire:model="remember" id="remember"
                class="h-4 w-4 rounded border-input text-primary focus:ring-primary" />
            <x-ui.label for="remember">{{ __('Remember me') }}</x-ui.label>
        </div>

        <div class="flex items-center justify-end">
            <x-ui.button type="submit" class="w-full">
                {{ __('Log in') }}
            </x-ui.button>
        </div>
    </form>

    @if (Route::has('register'))
        <div class="space-x-1 text-center text-sm text-muted-foreground rtl:space-x-reverse">
            {{ __('Don\'t have an account?') }}
            <a href="{{ route('register') }}"
                class="text-primary hover:text-primary/80"
                wire:navigate>
                {{ __('Sign up') }}
            </a>
        </div>
    @endif
</div>
