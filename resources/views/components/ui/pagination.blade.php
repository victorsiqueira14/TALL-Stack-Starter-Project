@props([
    'class' => '',
])

<div {{ $attributes->class([
    'flex items-center space-x-2',
    $class,
]) }}>
    {{ $slot }}
</div>
