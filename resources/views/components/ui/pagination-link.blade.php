@props([
    'active' => false,
    'class' => '',
])

@php
    $baseClasses = 'inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2';
    $activeClasses = $active ? 'bg-accent text-accent-foreground' : 'hover:bg-accent hover:text-accent-foreground';
@endphp

<a {{ $attributes->class([
    $baseClasses,
    $activeClasses,
    $class,
]) }}>
    {{ $slot }}
</a>
