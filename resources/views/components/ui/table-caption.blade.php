@props([
    'class' => '',
])

<caption {{ $attributes->class([
    'mt-4 text-sm text-muted-foreground',
    $class,
]) }}>
    {{ $slot }}
</caption>
