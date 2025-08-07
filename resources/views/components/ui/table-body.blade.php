@props([
    'class' => '',
])

<tbody {{ $attributes->class([
    '[&_tr:last-child]:border-0',
    $class,
]) }}>
    {{ $slot }}
</tbody>
