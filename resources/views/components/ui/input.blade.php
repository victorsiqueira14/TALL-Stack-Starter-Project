@props([
    'type' => 'text',
    'name' => null,
    'value' => null,
    'placeholder' => null,
    'disabled' => false,
    'error' => false,
    'label' => null
])

<div>
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-medium leading-6 text-gray-700 dark:text-gray-200 mb-1.5">
            {{ $label }}
        </label>
    @endif
    
    <div class="relative">
        <input {{ $attributes->class([
            'block w-full rounded-md border-0 px-3 py-2 text-sm shadow-sm ring-1 ring-inset transition-colors',
            'bg-white dark:bg-zinc-800 text-gray-900 dark:text-zinc-100',
            'placeholder:text-gray-400 dark:placeholder:text-zinc-500',
            'ring-gray-300 dark:ring-zinc-700',
            'focus:ring-2 focus:ring-inset focus:ring-blue-600 dark:focus:ring-blue-500',
            'disabled:cursor-not-allowed disabled:bg-gray-50 dark:disabled:bg-zinc-900 disabled:text-gray-500 dark:disabled:text-zinc-400',
            'disabled:ring-gray-200 dark:disabled:ring-zinc-800',
            $error ? 'ring-red-300 dark:ring-red-500 focus:ring-red-500 dark:focus:ring-red-400' : ''
        ])->merge([
            'id' => $name,
            'autocomplete' => 'off'
        ]) }}
            type="{{ $type }}"
            name="{{ $name }}"
            value="{{ $value }}"
            placeholder="{{ $placeholder }}"
            {{ $disabled ? 'disabled' : '' }}
        />
        
        @if($error)
            <div class="mt-1 text-sm text-red-600 dark:text-red-400">
                {{ $error }}
            </div>
        @endif
    </div>
</div>

