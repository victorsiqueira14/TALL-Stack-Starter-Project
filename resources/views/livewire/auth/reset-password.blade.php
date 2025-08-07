<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Reset password')" :description="__('Please enter your new password below')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="resetPassword" class="flex flex-col gap-6">
        <!-- Email Address -->
        <x-ui.form-field>
            <x-ui.label for="email">{{ __('Email') }}</x-ui.label>
            <x-ui.input type="email" id="email" wire:model="email" required autocomplete="email" />
        </x-ui.form-field>

        <!-- Password -->
        <x-ui.form-field>
            <x-ui.label for="password">{{ __('Password') }}</x-ui.label>
            <div class="relative">
                <x-ui.input type="password" id="password" wire:model="password" required autocomplete="new-password"
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

        <!-- Confirm Password -->
        <x-ui.form-field>
            <x-ui.label for="password_confirmation">{{ __('Confirm password') }}</x-ui.label>
            <div class="relative">
                <x-ui.input type="password" id="password_confirmation" wire:model="password_confirmation" required
                    autocomplete="new-password" placeholder="{{ __('Confirm password') }}" class="pr-10" />
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
        </x-ui.form-field>

        <div class="flex items-center justify-end">
            <x-ui.button type="submit" class="w-full">
                {{ __('Reset password') }}
            </x-ui.button>
        </div>
    </form>
</div>
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
                class="inline-flex w-full items-center justify-center rounded-lg bg-primary-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary-500 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 disabled:opacity-50 dark:bg-primary-500 dark:hover:bg-primary-400 dark:focus:ring-primary-400 dark:focus:ring-offset-zinc-800">
                {{ __('Reset password') }}
            </button>
        </div>
    </form>
</div>
