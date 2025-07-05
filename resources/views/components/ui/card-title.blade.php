@props([
    'class' => '',
])

<h3 {{ $attributes->class([
    'text-2xl font-semibold leading-none tracking-tight',
    $class,
]) }}>
    {{ $slot }}
</h3>
