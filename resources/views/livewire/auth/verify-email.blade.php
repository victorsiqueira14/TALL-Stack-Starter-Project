<div class="mt-4 flex flex-col gap-6">
    <x-ui.alert>
        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a1 1 0 001.42 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
        </svg>
        <x-ui.alert-description>
            {{ __('Please verify your email address by clicking on the link we just emailed to you.') }}
        </x-ui.alert-description>
    </x-ui.alert>

    @if (session('status') == 'verification-link-sent')
        <x-ui.alert variant="default">
            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <x-ui.alert-description class="text-primary">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </x-ui.alert-description>
        </x-ui.alert>
    @endif

    <div class="flex flex-col items-center justify-between space-y-3">
        <x-ui.button wire:click="sendVerification" class="w-full">
            {{ __('Resend verification email') }}
        </x-ui.button>

        <x-ui.button wire:click="logout" variant="ghost" class="text-sm">
            {{ __('Log out') }}
        </x-ui.button>
    </div>
</div>
