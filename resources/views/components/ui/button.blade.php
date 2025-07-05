@props([
    'variant' => 'default',
    'size' => 'default',
    'disabled' => false,
    'type' => 'button',
])

@php
    $classes = [
        'inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors',
        'focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2',
        'disabled:pointer-events-none disabled:opacity-50',
        
        // Variants
        'default' => 'bg-primary text-primary-foreground hover:bg-primary/90',
        'destructive' => 'bg-destructive text-destructive-foreground hover:bg-destructive/90',
        'outline' => 'border border-input bg-background hover:bg-accent hover:text-accent-foreground',
        'secondary' => 'bg-secondary text-secondary-foreground hover:bg-secondary/80',
        'ghost' => 'hover:bg-accent hover:text-accent-foreground',
        'link' => 'text-primary underline-offset-4 hover:underline',
        
        // Sizes
        'sm' => 'h-9 rounded-md px-3',
        'lg' => 'h-11 rounded-md px-8',
        'icon' => 'h-10 w-10',
    ];
    
    $variantClasses = $classes[$variant] ?? $classes['default'];
    $sizeClasses = $classes[$size] ?? $classes['default'];
    
    // Default size classes
    $defaultSizeClasses = 'h-10 px-4 py-2';
    if ($size === 'default') {
        $sizeClasses = $defaultSizeClasses;
    }
@endphp

<button 
    {{ $attributes->class([
        $classes[0], // Base classes
        $classes[1], // Focus classes
        $classes[2], // Disabled classes
        $variantClasses,
        $sizeClasses,
    ]) }}
    type="{{ $type }}"
    {{ $disabled ? 'disabled' : '' }}
>
    {{ $slot }}
</button>
