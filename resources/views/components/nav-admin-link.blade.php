@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'flex items-center px-4 py-2 rounded transition duration-150 ease-in-out bg-orangeDark text-blueDarker'
            : 'flex items-center px-4 py-2 text-orangeDark transition rounded duration-150 ease-in-out hover:bg-blueDark hover:text-white';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
