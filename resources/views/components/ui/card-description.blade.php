@props([
    'class' => '',
])

<p {{ $attributes->class([
    'text-sm text-muted-foreground',
    $class,
]) }}>
    {{ $slot }}
</p>
