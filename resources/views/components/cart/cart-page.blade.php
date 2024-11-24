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
            {{-- <div class="flex flex-col justify-between mt-4 text-right md:mt-0" wire:key="{{ $product->id }}">
                <livewire:plus-minus :product='$product' wire:key="{{ $product->id }}" />
                <p class="mt-4 text-lg font-semibold">
                    Total: Rp {{ number_format($product->price * $product->pivot->qty * 1, 0, ',', '.') }}
                </p>
            </div> --}}
            <div class="flex flex-col justify-between mt-4 text-right md:mt-0">
                <livewire:plus-minus :product="$product" wire:key="$product->id" />
                <p class="mt-4 text-lg font-semibold">
                    Total: Rp {{ number_format($product->price * $product->pivot->qty, 0, ',', '.') }}
                </p>
            </div>
        </div>
    </div>
@empty
    <p class="text-lg font-semibold text-center text-gray-500">Your cart is empty.</p>
@endforelse
