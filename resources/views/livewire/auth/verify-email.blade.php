<div class="mt-4 flex flex-col gap-6">
    <p class="text-center text-sm text-zinc-600 dark:text-zinc-400">
        {{ __('Please verify your email address by clicking on the link we just emailed to you.') }}
    </p>

    @if (session('status') == 'verification-link-sent')
        <p class="text-center text-sm font-medium text-green-600 dark:text-green-400">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </p>
    @endif

    <div class="flex flex-col items-center justify-between space-y-3">
        <button wire:click="sendVerification"
            class="inline-flex w-full items-center justify-center rounded-lg bg-primary-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary-500 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 disabled:opacity-50 dark:bg-primary-500 dark:hover:bg-primary-400 dark:focus:ring-primary-400 dark:focus:ring-offset-zinc-800">
            {{ __('Resend verification email') }}
        </button>

        <button wire:click="logout"
            class="text-sm text-primary-600 hover:text-primary-500 dark:text-primary-400 dark:hover:text-primary-300">
            {{ __('Log out') }}
        </button>
    </div>
</div>
