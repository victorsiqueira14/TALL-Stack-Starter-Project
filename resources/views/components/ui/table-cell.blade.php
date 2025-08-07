@props([
    'class' => '',
])

<td {{ $attributes->class([
    'p-4 align-middle [&:has([role=checkbox])]:pr-0',
    $class,
]) }}>
    {{ $slot }}
</td>
