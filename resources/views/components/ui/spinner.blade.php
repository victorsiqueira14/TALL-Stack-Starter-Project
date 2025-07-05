@props([
    'class' => '',
])

<div {{ $attributes->class([
    'flex h-full w-full flex-col items-center justify-center space-y-4',
    $class,
]) }}>
    <div class="flex items-center space-x-2">
        <div class="h-2 w-2 animate-bounce rounded-full bg-primary [animation-delay:-0.3s]"></div>
        <div class="h-2 w-2 animate-bounce rounded-full bg-primary [animation-delay:-0.15s]"></div>
        <div class="h-2 w-2 animate-bounce rounded-full bg-primary"></div>
    </div>
    {{ $slot }}
</div>
