@props([
    'class' => '',
])

<p {{ $attributes->class([
    'text-sm font-medium text-destructive',
    $class,
]) }}>
    {{ $slot }}
</p>
