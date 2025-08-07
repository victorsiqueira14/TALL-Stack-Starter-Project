<section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Update password')" :subheading="__('Ensure your account is using a long, random password to stay secure')">
        <form wire:submit="updatePassword" class="mt-6 space-y-6">
            <x-ui.form-field>
                <x-ui.label for="current_password">{{ __('Current password') }}</x-ui.label>
                <x-ui.input type="password" id="current_password" wire:model="current_password" required autocomplete="current-password" />
            </x-ui.form-field>

            <x-ui.form-field>
                <x-ui.label for="password">{{ __('New password') }}</x-ui.label>
                <x-ui.input type="password" id="password" wire:model="password" required autocomplete="new-password" />
            </x-ui.form-field>

            <x-ui.form-field>
                <x-ui.label for="password_confirmation">{{ __('Confirm Password') }}</x-ui.label>
                <x-ui.input type="password" id="password_confirmation" wire:model="password_confirmation" required autocomplete="new-password" />
            </x-ui.form-field>

            <div class="flex items-center gap-4">
                <x-ui.button type="submit">
                    {{ __('Save') }}
                </x-ui.button>

                <x-action-message class="me-3" on="password-updated">
                    {{ __('Saved.') }}
                </x-action-message>
            </div>
        </form>
    </x-settings.layout>
</section>
