<section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Profile')" :subheading="__('Update your name and email address')">
        <form wire:submit="updateProfileInformation" class="my-6 w-full space-y-6">
            <x-ui.form-field>
                <x-ui.label for="name">{{ __('Name') }}</x-ui.label>
                <x-ui.input type="text" id="name" wire:model="name" required autofocus autocomplete="name" />
            </x-ui.form-field>

            <x-ui.form-field>
                <x-ui.label for="email">{{ __('Email') }}</x-ui.label>
                <x-ui.input type="email" id="email" wire:model="email" required autocomplete="email" />
                
                @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail &&! auth()->user()->hasVerifiedEmail())
                    <x-ui.alert variant="destructive">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"/>
                        </svg>
                        <x-ui.alert-description>
                            {{ __('Your email address is unverified.') }}
                            <x-ui.button type="button" wire:click.prevent="resendVerificationNotification" variant="link" class="p-0 h-auto">
                                {{ __('Click here to re-send the verification email.') }}
                            </x-ui.button>
                        </x-ui.alert-description>
                    </x-ui.alert>

                    @if (session('status') === 'verification-link-sent')
                        <x-ui.alert>
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <x-ui.alert-description class="text-primary">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </x-ui.alert-description>
                        </x-ui.alert>
                    @endif
                @endif
            </x-ui.form-field>

            <div class="flex items-center gap-4">
                <x-ui.button type="submit">
                    {{ __('Save') }}
                </x-ui.button>

                <x-action-message class="me-3" on="profile-updated">
                    {{ __('Saved.') }}
                </x-action-message>
            </div>
        </form>

        <livewire:settings.delete-user-form />
    </x-settings.layout>
</section>
