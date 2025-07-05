@props([
    'class' => '',
])

<div {{ $attributes->class([
    'space-y-2',
    $class,
]) }}>
    {{ $slot }}
</div>
