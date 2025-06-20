<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <!-- Sidebar -->
        <aside class="fixed inset-y-0 left-0 z-50 w-64 transform border-e border-zinc-200 bg-zinc-50 transition-transform duration-300 ease-in-out dark:border-zinc-700 dark:bg-zinc-900 lg:translate-x-0" x-data="{ open: false }" :class="{'translate-x-0': open, '-translate-x-full': !open}">
            <!-- Mobile Toggle Close Button -->
            <button @click="open = false" class="absolute right-4 top-4 text-zinc-500 hover:text-zinc-700 dark:text-zinc-400 dark:hover:text-zinc-300 lg:hidden">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <!-- Logo -->
            <a href="{{ route('dashboard') }}" class="me-5 mt-4 flex items-center space-x-2 px-4 rtl:space-x-reverse" wire:navigate>
                <x-app-logo />
            </a>

            <!-- Navigation -->
            <nav class="mt-8 space-y-6 px-4">
                <!-- Platform Section -->
                <div>
                    <h3 class="px-2 text-xs font-semibold uppercase tracking-wider text-zinc-500 dark:text-zinc-400">
                        {{ __('Platform') }}
                    </h3>
                    <div class="mt-2 space-y-1">
                        <a href="{{ route('dashboard') }}" 
                           class="group flex items-center rounded-lg px-2 py-2 text-sm font-medium {{ request()->routeIs('dashboard') ? 'bg-zinc-200 text-zinc-900 dark:bg-zinc-800 dark:text-white' : 'text-zinc-700 hover:bg-zinc-100 dark:text-zinc-300 dark:hover:bg-zinc-800' }}"
                           wire:navigate>
                            <svg class="mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                            {{ __('Dashboard') }}
                        </a>
                    </div>
                </div>

                <!-- Links Section -->
                <div class="mt-auto">
                    <div class="space-y-1">
                        <a href="https://github.com/laravel/livewire-starter-kit" 
                           class="group flex items-center rounded-lg px-2 py-2 text-sm font-medium text-zinc-700 hover:bg-zinc-100 dark:text-zinc-300 dark:hover:bg-zinc-800"
                           target="_blank">
                            <svg class="mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                            </svg>
                            {{ __('Repository') }}
                        </a>
                        <a href="https://laravel.com/docs/starter-kits#livewire" 
                           class="group flex items-center rounded-lg px-2 py-2 text-sm font-medium text-zinc-700 hover:bg-zinc-100 dark:text-zinc-300 dark:hover:bg-zinc-800"
                           target="_blank">
                            <svg class="mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                            {{ __('Documentation') }}
                        </a>
                    </div>
                </div>

                <!-- Desktop User Menu -->
                <div class="relative" x-data="{ open: false }" @click.away="open = false">
                    <button @click="open = !open" 
                            class="flex w-full items-center justify-between rounded-lg px-2 py-2 text-sm font-medium text-zinc-700 hover:bg-zinc-100 dark:text-zinc-300 dark:hover:bg-zinc-800">
                        <div class="flex items-center">
                            <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                                <span class="flex h-full w-full items-center justify-center">
                                    {{ auth()->user()->initials() }}
                                </span>
                            </span>
                            <span class="ml-3 truncate">{{ auth()->user()->name }}</span>
                        </div>
                        <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div x-show="open" 
                         x-transition:enter="transition ease-out duration-100"
                         x-transition:enter-start="transform opacity-0 scale-95"
                         x-transition:enter-end="transform opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="transform opacity-100 scale-100"
                         x-transition:leave-end="transform opacity-0 scale-95"
                         class="absolute bottom-full left-0 z-50 mb-2 w-56 rounded-lg border border-zinc-200 bg-white shadow-lg dark:border-zinc-700 dark:bg-zinc-800">
                        <div class="p-2">
                            <div class="px-3 py-2">
                                <p class="truncate text-sm font-medium text-zinc-900 dark:text-white">{{ auth()->user()->name }}</p>
                                <p class="truncate text-sm text-zinc-500 dark:text-zinc-400">{{ auth()->user()->email }}</p>
                            </div>
                            <hr class="my-2 border-zinc-200 dark:border-zinc-700">
                            <a href="{{ route('settings.profile') }}" 
                               class="flex items-center rounded-md px-3 py-2 text-sm text-zinc-700 hover:bg-zinc-100 dark:text-zinc-300 dark:hover:bg-zinc-700"
                               wire:navigate>
                                <svg class="mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                {{ __('Settings') }}
                            </a>
                            <hr class="my-2 border-zinc-200 dark:border-zinc-700">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" 
                                        class="flex w-full items-center rounded-md px-3 py-2 text-sm text-zinc-700 hover:bg-zinc-100 dark:text-zinc-300 dark:hover:bg-zinc-700">
                                    <svg class="mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                    </svg>
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </aside>

        <!-- Mobile Header -->
        <header class="fixed inset-x-0 top-0 z-40 flex h-16 items-center border-b border-zinc-200 bg-white px-4 dark:border-zinc-700 dark:bg-zinc-900 lg:hidden">
            <button @click="open = true" class="text-zinc-500 hover:text-zinc-700 dark:text-zinc-400 dark:hover:text-zinc-300">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- Mobile User Menu -->
            <div class="ml-auto" x-data="{ open: false }" @click.away="open = false">
                <button @click="open = !open" 
                        class="flex items-center rounded-lg text-sm text-zinc-700 hover:bg-zinc-100 dark:text-zinc-300 dark:hover:bg-zinc-800">
                    <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                        <span class="flex h-full w-full items-center justify-center">
                            {{ auth()->user()->initials() }}
                        </span>
                    </span>
                    <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>

                <!-- Mobile Dropdown Menu -->
                <div x-show="open" 
                     x-transition:enter="transition ease-out duration-100"
                     x-transition:enter-start="transform opacity-0 scale-95"
                     x-transition:enter-end="transform opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="transform opacity-100 scale-100"
                     x-transition:leave-end="transform opacity-0 scale-95"
                     class="absolute right-2 top-full mt-2 w-56 rounded-lg border border-zinc-200 bg-white shadow-lg dark:border-zinc-700 dark:bg-zinc-800">
                    <div class="p-2">
                        <div class="px-3 py-2">
                            <p class="truncate text-sm font-medium text-zinc-900 dark:text-white">{{ auth()->user()->name }}</p>
                            <p class="truncate text-sm text-zinc-500 dark:text-zinc-400">{{ auth()->user()->email }}</p>
                        </div>
                        <hr class="my-2 border-zinc-200 dark:border-zinc-700">
                        <a href="{{ route('settings.profile') }}" 
                           class="flex items-center rounded-md px-3 py-2 text-sm text-zinc-700 hover:bg-zinc-100 dark:text-zinc-300 dark:hover:bg-zinc-700"
                           wire:navigate>
                            <svg class="mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            {{ __('Settings') }}
                        </a>
                        <hr class="my-2 border-zinc-200 dark:border-zinc-700">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" 
                                    class="flex w-full items-center rounded-md px-3 py-2 text-sm text-zinc-700 hover:bg-zinc-100 dark:text-zinc-300 dark:hover:bg-zinc-700">
                                <svg class="mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                </svg>
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <div class="lg:pl-64">
            {{ $slot }}
        </div>
    </body>
</html>
