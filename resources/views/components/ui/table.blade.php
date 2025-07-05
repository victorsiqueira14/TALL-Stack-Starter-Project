@props([
    'class' => '',
])

<div {{ $attributes->class([
    'flex w-full flex-col overflow-hidden rounded-md border border-input bg-background shadow-sm',
    $class,
]) }}>
    {{ $slot }}
</div>
