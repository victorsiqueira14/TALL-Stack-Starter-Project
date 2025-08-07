@props([
    'class' => '',
])

<div {{ $attributes->class([
    'grid gap-2',
    $class,
]) }}>
    {{ $slot }}
</div>
