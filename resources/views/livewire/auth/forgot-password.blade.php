<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Forgot password')" :description="__('Enter your email to receive a password reset link')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="sendPasswordResetLink" class="flex flex-col gap-6">
        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-zinc-900 dark:text-zinc-100">
                {{ __('Email Address') }}
            </label>
            <input type="email" id="email" wire:model="email" required autofocus placeholder="email@example.com"
                class="mt-1 block w-full rounded-lg border border-zinc-300 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm outline-none placeholder:text-zinc-400 focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-zinc-50 disabled:text-zinc-500 dark:border-zinc-700 dark:bg-zinc-800 dark:text-white dark:placeholder:text-zinc-500 dark:focus:border-primary-400 dark:focus:ring-primary-400 dark:disabled:bg-zinc-900 dark:disabled:text-zinc-400" />
        </div>

        <button type="submit"
            class="inline-flex w-full items-center justify-center rounded-lg bg-primary-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary-500 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 disabled:opacity-50 dark:bg-primary-500 dark:hover:bg-primary-400 dark:focus:ring-primary-400 dark:focus:ring-offset-zinc-800">
            {{ __('Email password reset link') }}
        </button>
    </form>

    <div class="space-x-1 text-center text-sm text-zinc-400 rtl:space-x-reverse">
        {{ __('Or, return to') }}
        <a href="{{ route('login') }}"
            class="text-primary-600 hover:text-primary-500 dark:text-primary-400 dark:hover:text-primary-300"
            wire:navigate>
            {{ __('log in') }}
        </a>
    </div>
</div>
