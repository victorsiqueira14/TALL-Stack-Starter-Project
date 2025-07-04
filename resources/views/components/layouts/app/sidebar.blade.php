<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-background text-foreground" x-data="{ sidebarOpen: false }" x-init="console.log('Alpine.js loaded')">
    <!-- Mobile Sidebar Backdrop -->
    <div x-show="sidebarOpen" x-cloak x-transition:enter="transition-opacity ease-linear duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" @click="sidebarOpen = false"
        class="fixed inset-0 z-40 bg-black bg-opacity-50 lg:hidden"></div>

    <!-- Sidebar -->
    <div class="fixed inset-y-0 left-0 z-50 w-64 transform border-e border-sidebar-border bg-sidebar transition-transform duration-300 ease-in-out lg:translate-x-0"
        :class="{ 'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen }">

        <!-- Mobile Toggle Close Button -->
        <button @click="sidebarOpen = false"
            class="absolute right-4 top-4 text-sidebar-foreground hover:text-sidebar-foreground/80 lg:hidden">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Sidebar Header -->
        <div class="flex h-16 items-center border-b border-sidebar-border px-4">
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-2 font-semibold" wire:navigate>
                    <div
                        class="bg-sidebar-primary text-sidebar-primary-foreground flex aspect-square size-8 items-center justify-center rounded-lg">
                        <x-app-logo-icon class="size-4" />
                    </div>
                    <div class="flex flex-col gap-0.5 leading-none">
                        <span class="font-medium text-sidebar-foreground">{{ config('app.name', 'Laravel') }}</span>
                        <span class="text-xs text-sidebar-foreground/60">v1.0.0</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- Sidebar Content -->
        <div class="flex-1 overflow-auto py-4">
            <div class="px-3">
                <div class="space-y-4">
                    <!-- Main Navigation -->
                    <div class="px-3 py-2">
                        <div class="space-y-1">
                            <!-- Dashboard -->
                            <div class="pb-2">
                                <a href="{{ route('dashboard') }}"
                                    class="flex w-full items-center rounded-sm px-2 py-1.5 text-sm font-medium transition-colors hover:bg-sidebar-accent hover:text-sidebar-accent-foreground {{ request()->routeIs('dashboard') ? 'bg-sidebar-accent text-sidebar-accent-foreground' : 'text-sidebar-foreground' }}"
                                    wire:navigate>
                                    <svg class="mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    {{ __('Dashboard') }}
                                </a>
                            </div>

                            <!-- Settings Section -->
                            <div x-data="{ open: {{ request()->routeIs('settings.*') ? 'true' : 'false' }} }">
                                <button @click="open = !open"
                                    class="flex w-full items-center rounded-sm px-2 py-1.5 text-sm font-medium transition-colors hover:bg-sidebar-accent hover:text-sidebar-accent-foreground {{ request()->routeIs('settings.*') ? 'bg-sidebar-accent text-sidebar-accent-foreground' : 'text-sidebar-foreground' }}">
                                    <svg class="mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    {{ __('Settings') }}
                                    <svg class="ml-auto h-4 w-4 transition-transform duration-200"
                                        :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>

                                <div x-show="open" x-collapse class="ml-6 mt-1 space-y-1">
                                    <a href="{{ route('settings.profile') }}"
                                        class="flex w-full items-center rounded-sm px-2 py-1.5 text-sm transition-colors hover:bg-sidebar-accent hover:text-sidebar-accent-foreground {{ request()->routeIs('settings.profile') ? 'bg-sidebar-accent text-sidebar-accent-foreground' : 'text-sidebar-foreground/70' }}"
                                        wire:navigate>
                                        {{ __('Profile') }}
                                    </a>
                                    <a href="{{ route('settings.password') }}"
                                        class="flex w-full items-center rounded-sm px-2 py-1.5 text-sm transition-colors hover:bg-sidebar-accent hover:text-sidebar-accent-foreground {{ request()->routeIs('settings.password') ? 'bg-sidebar-accent text-sidebar-accent-foreground' : 'text-sidebar-foreground/70' }}"
                                        wire:navigate>
                                        {{ __('Password') }}
                                    </a>
                                    <a href="{{ route('settings.appearance') }}"
                                        class="flex w-full items-center rounded-sm px-2 py-1.5 text-sm transition-colors hover:bg-sidebar-accent hover:text-sidebar-accent-foreground {{ request()->routeIs('settings.appearance') ? 'bg-sidebar-accent text-sidebar-accent-foreground' : 'text-sidebar-foreground/70' }}"
                                        wire:navigate>
                                        {{ __('Appearance') }}
                                    </a>
                                </div>
                            </div>

                            <!-- Resources Section -->
                            <div x-data="{ open: false }">
                                <button @click="open = !open"
                                    class="flex w-full items-center rounded-sm px-2 py-1.5 text-sm font-medium transition-colors hover:bg-sidebar-accent hover:text-sidebar-accent-foreground text-sidebar-foreground">
                                    <svg class="mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                    {{ __('Resources') }}
                                    <svg class="ml-auto h-4 w-4 transition-transform duration-200"
                                        :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>

                                <div x-show="open" x-collapse class="ml-6 mt-1 space-y-1">
                                    <a href="https://laravel.com/docs/starter-kits#livewire"
                                        class="flex w-full items-center rounded-sm px-2 py-1.5 text-sm transition-colors hover:bg-sidebar-accent hover:text-sidebar-accent-foreground text-sidebar-foreground/70"
                                        target="_blank">
                                        {{ __('Documentation') }}
                                    </a>
                                    <a href="https://github.com/laravel/livewire-starter-kit"
                                        class="flex w-full items-center rounded-sm px-2 py-1.5 text-sm transition-colors hover:bg-sidebar-accent hover:text-sidebar-accent-foreground text-sidebar-foreground/70"
                                        target="_blank">
                                        {{ __('Repository') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar Footer -->
        <div class="border-t border-sidebar-border p-4">
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open"
                    class="flex w-full items-center gap-2 rounded-sm px-2 py-1.5 text-sm font-medium transition-colors hover:bg-sidebar-accent hover:text-sidebar-accent-foreground text-sidebar-foreground">
                    <span
                        class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg bg-sidebar-primary text-sidebar-primary-foreground">
                        <span class="flex h-full w-full items-center justify-center text-xs">
                            {{ auth()->user()->initials() }}
                        </span>
                    </span>
                    <div class="flex flex-col gap-0.5 leading-none text-left">
                        <span class="text-xs font-medium">{{ auth()->user()->name }}</span>
                        <span class="text-xs text-sidebar-foreground/60">{{ auth()->user()->email }}</span>
                    </div>
                    <svg class="ml-auto h-4 w-4 transition-transform duration-200" :class="{ 'rotate-180': open }"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>

                <!-- User Dropdown Menu -->
                <div x-show="open" x-cloak @click.outside="open = false"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute bottom-full left-0 z-50 mb-2 w-full min-w-[200px] rounded-md border border-sidebar-border bg-popover p-1 shadow-lg">
                    <div class="px-2 py-1.5 text-sm text-popover-foreground">
                        <div class="font-medium">{{ auth()->user()->name }}</div>
                        <div class="text-xs text-muted-foreground">{{ auth()->user()->email }}</div>
                    </div>
                    <div class="my-1 h-px bg-sidebar-border"></div>
                    <a href="{{ route('settings.profile') }}" @click="open = false"
                        class="flex w-full items-center rounded-sm px-2 py-1.5 text-sm transition-colors hover:bg-accent hover:text-accent-foreground text-popover-foreground"
                        wire:navigate>
                        <svg class="mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                        {{ __('Profile') }}
                    </a>
                    <div class="my-1 h-px bg-sidebar-border"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="flex w-full items-center rounded-sm px-2 py-1.5 text-sm transition-colors hover:bg-accent hover:text-accent-foreground text-popover-foreground">
                            <svg class="mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
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

    <!-- Mobile Header -->
    <header
        class="fixed inset-x-0 top-0 z-40 flex h-16 items-center border-b border-sidebar-border bg-background px-4 lg:hidden">
        <button @click="sidebarOpen = true" class="text-foreground hover:text-foreground/80">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>

        <!-- Mobile User Menu -->
        <div class="ml-auto" x-data="{ open: false }">
            <button @click="open = !open"
                class="flex items-center gap-2 rounded-sm p-1.5 text-sm transition-colors hover:bg-accent hover:text-accent-foreground text-foreground">
                <span
                    class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg bg-primary text-primary-foreground">
                    <span class="flex h-full w-full items-center justify-center text-xs">
                        {{ auth()->user()->initials() }}
                    </span>
                </span>
                <svg class="h-4 w-4 transition-transform duration-200" :class="{ 'rotate-180': open }"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>

            <!-- Mobile Dropdown Menu -->
            <div x-show="open" x-cloak @click.outside="open = false"
                x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
                class="absolute right-2 top-full mt-2 w-56 rounded-md border border-border bg-popover p-1 shadow-lg">
                <div class="px-2 py-1.5 text-sm text-popover-foreground">
                    <div class="font-medium">{{ auth()->user()->name }}</div>
                    <div class="text-xs text-muted-foreground">{{ auth()->user()->email }}</div>
                </div>
                <div class="my-1 h-px bg-border"></div>
                <a href="{{ route('settings.profile') }}" @click="open = false"
                    class="flex w-full items-center rounded-sm px-2 py-1.5 text-sm transition-colors hover:bg-accent hover:text-accent-foreground text-popover-foreground"
                    wire:navigate>
                    <svg class="mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                    {{ __('Profile') }}
                </a>
                <div class="my-1 h-px bg-border"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="flex w-full items-center rounded-sm px-2 py-1.5 text-sm transition-colors hover:bg-accent hover:text-accent-foreground text-popover-foreground">
                        <svg class="mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        </svg>
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="lg:pl-64">
        <div class="min-h-screen bg-background p-4 pt-20 lg:pt-4">
            {{ $slot }}
        </div>
    </div>

    @livewireScripts
</body>

</html>
