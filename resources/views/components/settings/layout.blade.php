<div class="flex items-start max-md:flex-col">
    <div class="me-10 w-full pb-4 md:w-[220px]">
        <nav class="flex flex-col space-y-1">
            <a href="{{ route('settings.profile') }}" 
               class="rounded-lg px-3 py-2 text-sm font-medium {{ request()->routeIs('settings.profile') ? 'bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-white' : 'text-zinc-700 hover:bg-zinc-50 dark:text-zinc-300 dark:hover:bg-zinc-800' }}"
               wire:navigate>
                {{ __('Profile') }}
            </a>
            <a href="{{ route('settings.password') }}" 
               class="rounded-lg px-3 py-2 text-sm font-medium {{ request()->routeIs('settings.password') ? 'bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-white' : 'text-zinc-700 hover:bg-zinc-50 dark:text-zinc-300 dark:hover:bg-zinc-800' }}"
               wire:navigate>
                {{ __('Password') }}
            </a>
            <a href="{{ route('settings.appearance') }}" 
               class="rounded-lg px-3 py-2 text-sm font-medium {{ request()->routeIs('settings.appearance') ? 'bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-white' : 'text-zinc-700 hover:bg-zinc-50 dark:text-zinc-300 dark:hover:bg-zinc-800' }}"
               wire:navigate>
                {{ __('Appearance') }}
            </a>
        </nav>
    </div>

    <div class="hidden h-full w-px bg-zinc-200 dark:bg-zinc-700 md:hidden"></div>

    <div class="flex-1 self-stretch max-md:pt-6">
        <h1 class="text-2xl font-semibold text-zinc-900 dark:text-white">{{ $heading ?? '' }}</h1>
        <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400">{{ $subheading ?? '' }}</p>

        <div class="mt-5 w-full max-w-lg">
            {{ $slot }}
        </div>
    </div>
</div>
