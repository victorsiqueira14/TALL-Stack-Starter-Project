@props([
    'class' => '',
])

<div {{ $attributes->class([
    'relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full',
    $class,
]) }}>
    {{ $slot }}
</div>
