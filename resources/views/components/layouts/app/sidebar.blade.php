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
    <aside
        class="fixed inset-y-0 left-0 z-50 w-64 transform border-e border-sidebar-border bg-sidebar transition-transform duration-300 ease-in-out lg:translate-x-0"
        :class="{ 'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen }">
        <!-- Mobile Toggle Close Button -->
        <button @click="sidebarOpen = false"
            class="absolute right-4 top-4 text-muted-foreground hover:text-foreground lg:hidden">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Logo -->
        <a href="{{ route('dashboard') }}" class="me-5 mt-4 flex items-center space-x-2 px-4 rtl:space-x-reverse"
            wire:navigate>
            <x-app-logo />
        </a>

        <!-- Navigation -->
        <nav class="mt-8 space-y-6 px-4">
            <!-- Platform Section -->
            <div>
                <h3 class="px-2 text-xs font-semibold uppercase tracking-wider text-muted-foreground">
                    {{ __('Platform') }}
                </h3>
                <div class="mt-2 space-y-1">
                    <a href="{{ route('dashboard') }}"
                        class="group flex items-center rounded-lg px-2 py-2 text-sm font-medium {{ request()->routeIs('dashboard') ? 'bg-sidebar-accent text-sidebar-accent-foreground' : 'text-sidebar-foreground hover:bg-sidebar-accent/50' }}"
                        wire:navigate>
                        <svg class="mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        {{ __('Dashboard') }}
                    </a>
                </div>
            </div>

            <!-- Links Section -->
            <div class="mt-auto">
                <div class="space-y-1">
                    <a href="https://github.com/laravel/livewire-starter-kit"
                        class="group flex items-center rounded-lg px-2 py-2 text-sm font-medium text-sidebar-foreground hover:bg-sidebar-accent/50"
                        target="_blank">
                        <svg class="mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        {{ __('Repository') }}
                    </a>
                    <a href="https://laravel.com/docs/starter-kits#livewire"
                        class="group flex items-center rounded-lg px-2 py-2 text-sm font-medium text-sidebar-foreground hover:bg-sidebar-accent/50"
                        target="_blank">
                        <svg class="mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        {{ __('Documentation') }}
                    </a>
                </div>
            </div>

            <!-- Desktop User Menu -->
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open"
                    class="flex w-full items-center justify-between rounded-lg px-2 py-2 text-sm font-medium text-sidebar-foreground hover:bg-sidebar-accent/50">
                    <div class="flex items-center">
                        <span
                            class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg bg-muted text-foreground">
                            <span class="flex h-full w-full items-center justify-center">
                                {{ auth()->user()->initials() }}
                            </span>
                        </span>
                        <span class="ml-3 truncate">{{ auth()->user()->name }}</span>
                    </div>
                    <svg class="ml-2 h-5 w-5 transform transition-transform duration-200"
                        :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>

                <!-- Dropdown Menu -->
                <div x-show="open" x-cloak @click.outside="open = false"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute bottom-full left-0 z-50 mb-2 w-56 rounded-lg border border-border bg-popover shadow-lg">
                    <div class="p-2">
                        <div class="px-3 py-2">
                            <p class="truncate text-sm font-medium text-popover-foreground">
                                {{ auth()->user()->name }}</p>
                            <p class="truncate text-sm text-muted-foreground">{{ auth()->user()->email }}
                            </p>
                        </div>
                        <hr class="my-2 border-border">
                        <a href="{{ route('settings.profile') }}" @click="open = false"
                            class="flex items-center rounded-md px-3 py-2 text-sm text-popover-foreground hover:bg-accent hover:text-accent-foreground"
                            wire:navigate>
                            <svg class="mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            {{ __('Settings') }}
                        </a>
                        <hr class="my-2 border-border">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="flex w-full items-center rounded-md px-3 py-2 text-sm text-popover-foreground hover:bg-accent hover:text-accent-foreground">
                                <svg class="mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
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
        </nav>
    </aside>

    <!-- Mobile Header -->
    <header
        class="fixed inset-x-0 top-0 z-40 flex h-16 items-center border-b border-border bg-background px-4 lg:hidden">
        <button @click="sidebarOpen = true"
            class="text-muted-foreground hover:text-foreground">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>

        <!-- Mobile User Menu -->
        <div class="ml-auto" x-data="{ open: false }">
            <button @click="open = !open"
                class="flex items-center rounded-lg text-sm text-foreground hover:bg-accent">
                <span
                    class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg bg-muted text-foreground">
                    <span class="flex h-full w-full items-center justify-center">
                        {{ auth()->user()->initials() }}
                    </span>
                </span>
                <svg class="ml-2 h-5 w-5 transform transition-transform duration-200" :class="{ 'rotate-180': open }"
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
                class="absolute right-2 top-full mt-2 w-56 rounded-lg border border-border bg-popover shadow-lg">
                <div class="p-2">
                    <div class="px-3 py-2">
                        <p class="truncate text-sm font-medium text-popover-foreground">
                            {{ auth()->user()->name }}</p>
                        <p class="truncate text-sm text-muted-foreground">{{ auth()->user()->email }}</p>
                    </div>
                    <hr class="my-2 border-border">
                    <a href="{{ route('settings.profile') }}" @click="open = false"
                        class="flex items-center rounded-md px-3 py-2 text-sm text-popover-foreground hover:bg-accent hover:text-accent-foreground"
                        wire:navigate>
                        <svg class="mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        {{ __('Settings') }}
                    </a>
                    <hr class="my-2 border-border">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="flex w-full items-center rounded-md px-3 py-2 text-sm text-popover-foreground hover:bg-accent hover:text-accent-foreground">
                            <svg class="mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
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
