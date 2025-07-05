@props([
    'class' => '',
])

<div {{ $attributes->class([
    'relative overflow-hidden rounded-lg border bg-background p-2',
    $class,
]) }}>
    {{ $slot }}
</div>
