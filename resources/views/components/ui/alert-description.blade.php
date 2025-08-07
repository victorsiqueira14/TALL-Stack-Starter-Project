@props([
    'class' => '',
])

<div {{ $attributes->class([
    'text-sm [&_p]:leading-relaxed',
    $class,
]) }}>
    {{ $slot }}
</div>
