@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'items-center group inline-flex w-full items-center px-4 py-2 text-gray-700 transition rounded transition duration-150 ease-in-out focus:bg-orangeDark focus:text-orangeDark'
            : 'items-center group inline-flex w-full items-center px-4 py-2 text-gray-700 transition rounded transition duration-150 ease-in-out hover:bg-blueDarker hover:text-white';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
