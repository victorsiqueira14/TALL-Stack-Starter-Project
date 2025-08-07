@props([
    'class' => '',
])

<div {{ $attributes->class([
    'rounded-lg border bg-card text-card-foreground shadow-sm',
    $class,
]) }}>
    {{ $slot }}
</div>
