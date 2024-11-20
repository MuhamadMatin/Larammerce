<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-semibold leading-tight text-gray-800">
            {{ __('Saved Products') }}
        </h2>
    </x-slot>

    <div class="mx-8">
        <div class="grid flex-wrap w-full grid-cols-2 gap-5 mt-4 md:flex">
            @include('components.product.product-page', ['products' => $products])
        </div>
    </div>
</x-app-layout>
