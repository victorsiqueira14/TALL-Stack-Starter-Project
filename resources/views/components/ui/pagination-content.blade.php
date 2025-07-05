@props([
    'class' => '',
])

<nav {{ $attributes->class([
    'mx-auto flex w-full justify-center',
    $class,
]) }} role="navigation" aria-label="pagination">
    {{ $slot }}
</nav>
