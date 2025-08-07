@props([
    'class' => '',
])

<div {{ $attributes->class([
    'flex flex-row items-center gap-1',
    $class,
]) }}>
    {{ $slot }}
</div>
