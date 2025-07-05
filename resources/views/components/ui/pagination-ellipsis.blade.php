@props([
    'class' => '',
])

<span {{ $attributes->class([
    'flex h-9 w-9 items-center justify-center',
    $class,
]) }}>
    {{ $slot }}
</span>
