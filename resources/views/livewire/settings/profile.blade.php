<section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Profile')" :subheading="__('Update your name and email address')">
        <form wire:submit="updateProfileInformation" class="my-6 w-full space-y-6">
            <div>
                <label for="name" class="block text-sm font-medium text-foreground">{{ __('Name') }}</label>
                <input type="text" 
                       id="name"
                       wire:model="name"
                       required
                       autofocus
                       autocomplete="name"
                       class="mt-1 block w-full rounded-lg border border-input bg-background px-3 py-2 text-sm text-foreground shadow-sm outline-none placeholder:text-muted-foreground focus:border-ring focus:ring-1 focus:ring-ring disabled:bg-muted disabled:text-muted-foreground" />
            </div>

            <div>
                <div>
                    <label for="email" class="block text-sm font-medium text-foreground">{{ __('Email') }}</label>
                    <input type="email"
                           id="email"
                           wire:model="email"
                           required
                           autocomplete="email"
                           class="mt-1 block w-full rounded-lg border border-input bg-background px-3 py-2 text-sm text-foreground shadow-sm outline-none placeholder:text-muted-foreground focus:border-ring focus:ring-1 focus:ring-ring disabled:bg-muted disabled:text-muted-foreground" />
                </div>

                @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail &&! auth()->user()->hasVerifiedEmail())
                    <div>
                        <p class="mt-4 text-sm text-muted-foreground">
                            {{ __('Your email address is unverified.') }}

                            <button type="button"
                                    wire:click.prevent="resendVerificationNotification"
                                    class="cursor-pointer text-sm text-primary hover:text-primary/80">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 text-sm font-medium text-green-600 dark:text-green-400">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>

            <div class="flex items-center gap-4">
                <div class="flex items-center justify-end">
                    <button type="submit"
                            class="inline-flex items-center justify-center rounded-lg bg-primary px-4 py-2 text-sm font-semibold text-primary-foreground shadow-sm hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:opacity-50">
                        {{ __('Save') }}
                    </button>
                </div>

                <x-action-message class="me-3" on="profile-updated">
                    {{ __('Saved.') }}
                </x-action-message>
            </div>
        </form>

        <livewire:settings.delete-user-form />
    </x-settings.layout>
</section>
