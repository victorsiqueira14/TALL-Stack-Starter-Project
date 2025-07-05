@props([
    'class' => '',
])

<h5 {{ $attributes->class([
    'mb-1 font-medium leading-none tracking-tight',
    $class,
]) }}>
    {{ $slot }}
</h5>
