@props(['disabled' => false])

<input @disabled($disabled)
    {{ $attributes->merge(['class' => 'border-gray-300 focus:border-orangeDark focus:ring-orangeDark rounded-md shadow-sm']) }}>
