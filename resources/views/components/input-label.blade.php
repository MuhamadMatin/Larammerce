@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-blueDarker']) }}>
    {{ $value ?? $slot }}
</label>
