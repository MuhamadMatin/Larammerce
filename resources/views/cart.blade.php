<x-app-layout>
    <div class="container p-4 mx-auto">
        <!-- Title -->
        <x-slot name="header">
            <h1 class="pb-6 text-2xl font-bold leading-tight text-center text-gray-800">
                {{ __('Your Cart') }}
            </h1>
        </x-slot>

        @forelse ($products as $product)
            <div class="flex flex-col items-center p-4 mb-4 bg-white rounded-lg shadow-md md:flex-row">
                <!-- Product Image -->
                <div class="w-full md:w-1/4">
                    <img src="{{ $product->thumnail }}" alt="{{ $product->name }}" class="w-full h-auto rounded-md">
                </div>

                <!-- Product Info -->
                <div class="flex flex-col w-full mt-4 md:flex-row md:justify-between md:w-3/4 md:ml-4 md:mt-0">
                    <div class="flex flex-col md:w-2/3">
                        <h2 class="text-xl font-semibold">{{ $product->name }}</h2>
                        <p class="text-sm text-gray-600">{{ $product->shop->name }}</p>
                        <p class="mt-2 font-bold text-md">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </p>
                        <div class="flex mt-2 gap-x-2">

                        </div>
                    </div>

                    <!-- Quantity & Total Price -->
                    <div class="flex flex-col justify-between mt-4 text-right md:mt-0">
                        <livewire:plus-minus />
                        <p class="mt-4 text-lg font-semibold">
                            Total: Rp {{ number_format($product->price * 1, 0, ',', '.') }} <!-- Adjust for quantity -->
                        </p>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-lg font-semibold text-center text-gray-500">Your cart is empty.</p>
        @endforelse

        <!-- Cart Summary -->
        @if ($products->count() > 0)
            <div class="mt-6">
                <span class="flex items-center justify-end mt-6 gap-x-2">
                    <p class="text-lg font-bold">Total Price</p>
                    <p class="text-xl font-semibold text-blueDarker">
                        Rp {{ number_format($products->sum('price'), 0, ',', '.') }}
                    </p>
                </span>
                <span class="flex justify-end mt-4">
                    <button
                        class="w-full px-4 py-2 text-white transition duration-150 rounded-md bg-orangeDark md:w-1/2 hover:bg-orange-600">
                        Checkout
                    </button>
                </span>
            </div>
        @endif
    </div>
</x-app-layout>
