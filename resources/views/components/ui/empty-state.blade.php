@props([
    'class' => '',
])

<div {{ $attributes->class([
    'flex items-center justify-center p-6',
    $class,
]) }}>
    {{ $slot }}
</div>
