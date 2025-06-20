<section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Profile')" :subheading="__('Update your name and email address')">
        <form wire:submit="updateProfileInformation" class="my-6 w-full space-y-6">
            <div>
                <label for="name" class="block text-sm font-medium text-zinc-900 dark:text-zinc-100">{{ __('Name') }}</label>
                <input type="text" 
                       id="name"
                       wire:model="name"
                       required
                       autofocus
                       autocomplete="name"
                       class="mt-1 block w-full rounded-lg border border-zinc-300 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm outline-none placeholder:text-zinc-400 focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-zinc-50 disabled:text-zinc-500 dark:border-zinc-700 dark:bg-zinc-800 dark:text-white dark:placeholder:text-zinc-500 dark:focus:border-primary-400 dark:focus:ring-primary-400 dark:disabled:bg-zinc-900 dark:disabled:text-zinc-400" />
            </div>

            <div>
                <div>
                    <label for="email" class="block text-sm font-medium text-zinc-900 dark:text-zinc-100">{{ __('Email') }}</label>
                    <input type="email"
                           id="email"
                           wire:model="email"
                           required
                           autocomplete="email"
                           class="mt-1 block w-full rounded-lg border border-zinc-300 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm outline-none placeholder:text-zinc-400 focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-zinc-50 disabled:text-zinc-500 dark:border-zinc-700 dark:bg-zinc-800 dark:text-white dark:placeholder:text-zinc-500 dark:focus:border-primary-400 dark:focus:ring-primary-400 dark:disabled:bg-zinc-900 dark:disabled:text-zinc-400" />
                </div>

                @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail &&! auth()->user()->hasVerifiedEmail())
                    <div>
                        <p class="mt-4 text-sm text-zinc-600 dark:text-zinc-400">
                            {{ __('Your email address is unverified.') }}

                            <button type="button"
                                    wire:click.prevent="resendVerificationNotification"
                                    class="cursor-pointer text-sm text-primary-600 hover:text-primary-500 dark:text-primary-400 dark:hover:text-primary-300">
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
                            class="inline-flex items-center justify-center rounded-lg bg-primary-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary-500 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 disabled:opacity-50 dark:bg-primary-500 dark:hover:bg-primary-400 dark:focus:ring-primary-400 dark:focus:ring-offset-zinc-800">
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
