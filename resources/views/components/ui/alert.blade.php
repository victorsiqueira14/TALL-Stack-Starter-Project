@props([
    'variant' => 'default',
])

@php
    $classes = [
        'base' => 'relative w-full rounded-lg border p-4',
        'default' => 'bg-background text-foreground',
        'destructive' => 'border-destructive/50 text-destructive dark:border-destructive [&>svg]:text-destructive',
    ];
    
    $variantClasses = $classes[$variant] ?? $classes['default'];
@endphp

<div {{ $attributes->class([
    $classes['base'],
    $variantClasses,
]) }} role="alert">
    {{ $slot }}
</div>
