@props([
    'variant' => 'default',
])

@php
    $classes = [
        'base' => 'rounded-lg border bg-card text-card-foreground shadow-sm',
        'default' => '',
        'destructive' => 'border-destructive/50 text-destructive dark:border-destructive',
    ];
    
    $variantClasses = $classes[$variant] ?? $classes['default'];
@endphp

<div {{ $attributes->class([
    $classes['base'],
    $variantClasses,
]) }}>
    {{ $slot }}
</div>
