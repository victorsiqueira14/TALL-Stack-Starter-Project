@props([
    'class' => '',
])

<thead {{ $attributes->class([
    '[&_tr]:border-b',
    $class,
]) }}>
    {{ $slot }}
</thead>
