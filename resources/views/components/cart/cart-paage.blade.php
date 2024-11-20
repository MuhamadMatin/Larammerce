<x-app-layout>
    <div class="container px-4 py-6 mx-auto">
        <x-slot name="header">
            <h2 class="mb-4 text-2xl font-semibold leading-tight text-gray-800">
                {{ __('Your Cart') }}
            </h2>
        </x-slot>

        @forelse ($products as $product)
            <div class="grid justify-between grid-rows-2 py-4 border-b md:flex md:items-center">
                <!-- Product Image -->
                <div class="flex items-center space-x-4">
                    <img src="{{ $product->thumnail }}" alt="{{ $product->name }}"
                        class="object-cover w-16 h-16 rounded-lg">
                    <div>
                        <p class="text-lg font-semibold">{{ $product->name }}</p>
                        <p class="text-gray-500">{{ $product->shop->name }}</p>
                    </div>
                </div>

                <!-- Product Price and Quantity -->
                <div class="flex items-center space-x-4">
                    <p class="text-lg font-semibold">{{ number_format($product->price, 2) }} IDR</p>

                    <!-- Quantity Input -->
                    <div class="flex items-center space-x-2">
                        <button class="px-2 py-1 border rounded"
                            wire:click="decreaseQuantity({{ $product->id }})">-</button>
                        <input type="number" value="1" min="1" class="w-16 text-center border rounded"
                            readonly>
                        <button class="px-2 py-1 border rounded"
                            wire:click="increaseQuantity({{ $product->id }})">+</button>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-xl text-center text-gray-500">Your cart is empty.</p>
        @endforelse

        <!-- Cart Summary -->
        <div class="flex items-center justify-between mt-6">
            <p class="text-xl font-semibold">Total: </p>
            {{-- <p class="text-xl font-semibold">{{ number_format($totalPrice, 2) }} IDR</p> --}}
        </div>

        <div class="flex justify-between mt-6">
            <a href="" class="font-semibold text-blue-500">Continue Shopping</a>
            <a href="" class="px-6 py-3 text-white bg-blue-500 rounded-lg">Proceed to
                Checkout</a>
        </div>
    </div>
</x-app-layout>
