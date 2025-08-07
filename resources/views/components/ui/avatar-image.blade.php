@props([
    'src' => '',
    'alt' => '',
    'class' => '',
])

<img {{ $attributes->class([
    'aspect-square h-full w-full',
    $class,
]) }} src="{{ $src }}" alt="{{ $alt }}" />
