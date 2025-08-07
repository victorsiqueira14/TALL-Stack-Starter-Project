@props([
    'class' => '',
])

<div {{ $attributes->class([
    'flex flex-col items-center justify-center space-y-4 p-8',
    $class,
]) }}>
    {{ $slot }}
</div>
