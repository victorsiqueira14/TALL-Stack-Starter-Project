<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="register" class="flex flex-col gap-6">
        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-foreground">
                {{ __('Name') }}
            </label>
            <input type="text" id="name" wire:model="name" required autofocus autocomplete="name"
                placeholder="{{ __('Full name') }}"
                class="mt-1 block w-full rounded-lg border border-input bg-background px-3 py-2 text-sm text-foreground shadow-sm outline-none placeholder:text-muted-foreground focus:border-ring focus:ring-1 focus:ring-ring disabled:bg-muted disabled:text-muted-foreground" />
        </div>

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-foreground">
                {{ __('Email address') }}
            </label>
            <input type="email" id="email" wire:model="email" required autocomplete="email"
                placeholder="email@example.com"
                class="mt-1 block w-full rounded-lg border border-input bg-background px-3 py-2 text-sm text-foreground shadow-sm outline-none placeholder:text-muted-foreground focus:border-ring focus:ring-1 focus:ring-ring disabled:bg-muted disabled:text-muted-foreground" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-foreground">
                {{ __('Password') }}
            </label>
            <div class="relative mt-1">
                <input type="password" id="password" wire:model="password" required autocomplete="new-password"
                    placeholder="{{ __('Password') }}"
                    class="block w-full rounded-lg border border-input bg-background px-3 py-2 text-sm text-foreground shadow-sm outline-none placeholder:text-muted-foreground focus:border-ring focus:ring-1 focus:ring-ring disabled:bg-muted disabled:text-muted-foreground" />
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
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-foreground">
                {{ __('Confirm password') }}
            </label>
            <div class="relative mt-1">
                <input type="password" id="password_confirmation" wire:model="password_confirmation" required
                    autocomplete="new-password" placeholder="{{ __('Confirm password') }}"
                    class="block w-full rounded-lg border border-input bg-background px-3 py-2 text-sm text-foreground shadow-sm outline-none placeholder:text-muted-foreground focus:border-ring focus:ring-1 focus:ring-ring disabled:bg-muted disabled:text-muted-foreground" />
                <button type="button"
                    onclick="var input = document.getElementById('password_confirmation'); input.type = input.type === 'password' ? 'text' : 'password';"
                    class="absolute inset-y-0 right-0 flex items-center px-3 text-muted-foreground hover:text-foreground">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="flex items-center justify-end">
            <button type="submit"
                class="inline-flex w-full items-center justify-center rounded-lg bg-primary px-4 py-2 text-sm font-semibold text-primary-foreground shadow-sm hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:opacity-50">
                {{ __('Register') }}
            </button>
        </div>
    </form>

    @if (Route::has('login'))
        <div class="space-x-1 text-center text-sm text-muted-foreground rtl:space-x-reverse">
            {{ __('Already have an account?') }}
            <a href="{{ route('login') }}"
                class="text-primary hover:text-primary/80"
                wire:navigate>
                {{ __('Log in') }}
            </a>
        </div>
    @endif
</div>
