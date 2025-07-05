@props([
    'class' => '',
])

<div {{ $attributes->class([
    'flex items-center justify-between px-2',
    $class,
]) }}>
    {{ $slot }}
</div>
