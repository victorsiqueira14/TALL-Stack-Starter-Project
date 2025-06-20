<section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Update password')" :subheading="__('Ensure your account is using a long, random password to stay secure')">
        <form wire:submit="updatePassword" class="mt-6 space-y-6">
            <div>
                <label for="current_password" class="block text-sm font-medium text-zinc-900 dark:text-zinc-100">
                    {{ __('Current password') }}
                </label>
                <input type="password"
                       id="current_password"
                       wire:model="current_password"
                       required
                       autocomplete="current-password"
                       class="mt-1 block w-full rounded-lg border border-zinc-300 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm outline-none placeholder:text-zinc-400 focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-zinc-50 disabled:text-zinc-500 dark:border-zinc-700 dark:bg-zinc-800 dark:text-white dark:placeholder:text-zinc-500 dark:focus:border-primary-400 dark:focus:ring-primary-400 dark:disabled:bg-zinc-900 dark:disabled:text-zinc-400" />
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-zinc-900 dark:text-zinc-100">
                    {{ __('New password') }}
                </label>
                <input type="password"
                       id="password"
                       wire:model="password"
                       required
                       autocomplete="new-password"
                       class="mt-1 block w-full rounded-lg border border-zinc-300 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm outline-none placeholder:text-zinc-400 focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-zinc-50 disabled:text-zinc-500 dark:border-zinc-700 dark:bg-zinc-800 dark:text-white dark:placeholder:text-zinc-500 dark:focus:border-primary-400 dark:focus:ring-primary-400 dark:disabled:bg-zinc-900 dark:disabled:text-zinc-400" />
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-zinc-900 dark:text-zinc-100">
                    {{ __('Confirm Password') }}
                </label>
                <input type="password"
                       id="password_confirmation"
                       wire:model="password_confirmation"
                       required
                       autocomplete="new-password"
                       class="mt-1 block w-full rounded-lg border border-zinc-300 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm outline-none placeholder:text-zinc-400 focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-zinc-50 disabled:text-zinc-500 dark:border-zinc-700 dark:bg-zinc-800 dark:text-white dark:placeholder:text-zinc-500 dark:focus:border-primary-400 dark:focus:ring-primary-400 dark:disabled:bg-zinc-900 dark:disabled:text-zinc-400" />
            </div>

            <div class="flex items-center gap-4">
                <div class="flex items-center justify-end">
                    <button type="submit"
                            class="inline-flex w-full items-center justify-center rounded-lg bg-primary-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary-500 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 disabled:opacity-50 dark:bg-primary-500 dark:hover:bg-primary-400 dark:focus:ring-primary-400 dark:focus:ring-offset-zinc-800">
                        {{ __('Save') }}
                    </button>
                </div>

                <x-action-message class="me-3" on="password-updated">
                    {{ __('Saved.') }}
                </x-action-message>
            </div>
        </form>
    </x-settings.layout>
</section>
