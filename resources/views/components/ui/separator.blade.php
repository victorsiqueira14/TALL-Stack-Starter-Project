@props([
    'class' => '',
])

<div {{ $attributes->class([
    'h-px bg-border',
    $class,
]) }}>
</div>
