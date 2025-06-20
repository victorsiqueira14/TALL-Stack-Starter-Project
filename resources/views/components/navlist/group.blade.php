@props([
    'expandable' => false,
    'expanded' => true,
    'heading' => null,
])

@if ($expandable && $heading)
    <div x-data="{ open: {{ $expanded ? 'true' : 'false' }} }" {{ $attributes->class('group') }}>
        <button type="button" @click="open = !open"
            class="group mb-[2px] flex h-10 w-full items-center rounded-lg text-zinc-500 hover:bg-zinc-800/5 hover:text-zinc-800 lg:h-8 dark:text-white/80 dark:hover:bg-white/[7%] dark:hover:text-white">
            <div class="ps-3 pe-4">
                <x-icons.chevron-down x-show="open" class="size-3" />
                <x-icons.chevron-right x-show="!open" class="size-3" />
            </div>

            <span class="text-sm font-medium leading-none">{{ $heading }}</span>
        </button>

        <div x-show="open" class="relative space-y-[2px] ps-7">
            <div class="absolute inset-y-[3px] start-0 ms-4 w-px bg-zinc-200 dark:bg-white/30"></div>
            {{ $slot }}
        </div>
    </div>
@elseif ($heading)
    <div {{ $attributes->class('block space-y-[2px]') }}>
        <div class="px-1 py-2">
            <div class="text-xs leading-none text-zinc-400">{{ $heading }}</div>
        </div>

        <div>
            {{ $slot }}
        </div>
    </div>
@else
    <div {{ $attributes->class('block space-y-[2px]') }}>
        {{ $slot }}
    </div>
@endif
