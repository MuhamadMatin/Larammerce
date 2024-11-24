<x-app-layout>
    <div class="container p-4 mx-auto">
        <!-- Title -->
        <x-slot name="header">
            <h1 class="pb-6 text-2xl font-bold leading-tight text-center text-gray-800">
                {{ __('Your Cart') }}
            </h1>
        </x-slot>

        <livewire:cart-list :products="$products" />
    </div>
</x-app-layout>
