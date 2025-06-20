<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">
    <!-- Header -->
    <header class="border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
        <div class="mx-auto flex h-16 max-w-7xl items-center gap-4 px-4 sm:px-6 lg:px-8">
            <!-- Mobile Menu Button -->
            <button type="button" x-data="" x-on:click="$dispatch('toggle-sidebar')"
                class="text-zinc-500 hover:text-zinc-600 lg:hidden">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>

            <!-- Logo -->
            <a href="{{ route('dashboard') }}" class="ms-2 me-5 flex items-center space-x-2 rtl:space-x-reverse lg:ms-0"
                wire:navigate>
                <x-app-logo />
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex lg:items-center lg:space-x-4">
                <a href="{{ route('dashboard') }}"
                    class="flex items-center rounded-lg px-3 py-2 text-sm font-medium {{ request()->routeIs('dashboard') ? 'bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-white' : 'text-zinc-700 hover:bg-zinc-50 dark:text-zinc-300 dark:hover:bg-zinc-800' }}"
                    wire:navigate>
                    <svg class="mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                    </svg>
                    {{ __('Dashboard') }}
                </a>
            </nav>

            <div class="flex-1"></div>

            <!-- Desktop Actions -->
            <div class="hidden lg:flex lg:items-center lg:space-x-2">
                <!-- Search Button -->
                <button type="button"
                    class="flex h-10 w-10 items-center justify-center rounded-lg text-zinc-500 hover:bg-zinc-100 hover:text-zinc-600 dark:text-zinc-400 dark:hover:bg-zinc-800 dark:hover:text-zinc-300"
                    title="{{ __('Search') }}">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </button>

                <!-- Repository Link -->
                <a href="https://github.com/laravel/livewire-starter-kit" target="_blank"
                    class="flex h-10 w-10 items-center justify-center rounded-lg text-zinc-500 hover:bg-zinc-100 hover:text-zinc-600 dark:text-zinc-400 dark:hover:bg-zinc-800 dark:hover:text-zinc-300"
                    title="{{ __('Repository') }}">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                    </svg>
                </a>

                <!-- Documentation Link -->
                <a href="https://laravel.com/docs/starter-kits#livewire" target="_blank"
                    class="flex h-10 w-10 items-center justify-center rounded-lg text-zinc-500 hover:bg-zinc-100 hover:text-zinc-600 dark:text-zinc-400 dark:hover:bg-zinc-800 dark:hover:text-zinc-300"
                    title="{{ __('Documentation') }}">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                    </svg>
                </a>
            </div>

            <!-- User Menu -->
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open"
                    class="flex h-10 w-10 items-center justify-center rounded-lg bg-neutral-200 text-black hover:bg-neutral-300 dark:bg-neutral-700 dark:text-white dark:hover:bg-neutral-600">
                    <span class="text-sm font-medium">{{ auth()->user()->initials() }}</span>
                </button>

                <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 top-full mt-2 w-56 origin-top-right rounded-lg border border-zinc-200 bg-white shadow-lg dark:border-zinc-700 dark:bg-zinc-800"
                    style="display: none;">
                    <div class="p-2">
                        <div class="flex items-center gap-2 px-3 py-2">
                            <span
                                class="flex h-8 w-8 items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                                {{ auth()->user()->initials() }}
                            </span>
                            <div class="flex-1 text-sm">
                                <p class="font-medium text-zinc-900 dark:text-white">{{ auth()->user()->name }}</p>
                                <p class="text-xs text-zinc-500 dark:text-zinc-400">{{ auth()->user()->email }}</p>
                            </div>
                        </div>

                        <hr class="my-2 border-zinc-200 dark:border-zinc-700">

                        <a href="{{ route('settings.profile') }}"
                            class="flex items-center px-3 py-2 text-sm text-zinc-700 hover:bg-zinc-100 dark:text-zinc-300 dark:hover:bg-zinc-700"
                            wire:navigate>
                            <svg class="mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            {{ __('Settings') }}
                        </a>

                        <hr class="my-2 border-zinc-200 dark:border-zinc-700">

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="flex w-full items-center px-3 py-2 text-sm text-zinc-700 hover:bg-zinc-100 dark:text-zinc-300 dark:hover:bg-zinc-700">
                                <svg class="mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                </svg>
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Sidebar -->
    <div x-data="{ open: false }" x-on:toggle-sidebar.window="open = !open" x-show="open"
        class="fixed inset-0 z-40 lg:hidden" style="display: none;">
        <!-- Backdrop -->
        <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 bg-zinc-600 bg-opacity-75" @click="open = false">
        </div>

        <!-- Sidebar -->
        <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
            x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in-out duration-300 transform"
            x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
            class="relative flex w-full max-w-xs flex-1 flex-col border-e border-zinc-200 bg-zinc-50 pt-5 dark:border-zinc-700 dark:bg-zinc-900">
            <!-- Close button -->
            <div class="absolute right-0 top-0 -mr-12 pt-2">
                <button type="button" @click="open = false"
                    class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="sr-only">Close sidebar</span>
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Sidebar content -->
            <div class="flex flex-1 flex-col overflow-y-auto px-4">
                <div class="flex flex-shrink-0 items-center space-x-2 rtl:space-x-reverse">
                    <a href="{{ route('dashboard') }}" class="ms-1" wire:navigate>
                        <x-app-logo />
                    </a>
                </div>

                <nav class="mt-8 space-y-8">
                    <div>
                        <h3 class="px-3 text-sm font-medium text-zinc-500 dark:text-zinc-400">{{ __('Platform') }}
                        </h3>
                        <div class="mt-2 space-y-1">
                            <a href="{{ route('dashboard') }}"
                                class="flex items-center rounded-lg px-3 py-2 text-sm font-medium {{ request()->routeIs('dashboard') ? 'bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-white' : 'text-zinc-700 hover:bg-zinc-50 dark:text-zinc-300 dark:hover:bg-zinc-800' }}"
                                wire:navigate>
                                <svg class="mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                                </svg>
                                {{ __('Dashboard') }}
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="space-y-1">
                            <a href="https://github.com/laravel/livewire-starter-kit" target="_blank"
                                class="flex items-center rounded-lg px-3 py-2 text-sm font-medium text-zinc-700 hover:bg-zinc-50 dark:text-zinc-300 dark:hover:bg-zinc-800">
                                <svg class="mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                                </svg>
                                {{ __('Repository') }}
                            </a>

                            <a href="https://laravel.com/docs/starter-kits#livewire" target="_blank"
                                class="flex items-center rounded-lg px-3 py-2 text-sm font-medium text-zinc-700 hover:bg-zinc-50 dark:text-zinc-300 dark:hover:bg-zinc-800">
                                <svg class="mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                </svg>
                                {{ __('Documentation') }}
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="w-14 flex-shrink-0" aria-hidden="true"></div>
    </div>

    {{ $slot }}
</body>

</html>
