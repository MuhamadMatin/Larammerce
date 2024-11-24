<div>
    @include('components.cart.cart-page', ['products' => $this->products])

    <!-- Cart Summary -->
    @if ($this->products->count() > 0)
        <div class="mt-6">
            <span class="flex items-center justify-end mt-6 gap-x-2">
                <p class="text-lg font-bold">Total Price</p>
                <p class="text-xl font-semibold text-blueDarker">
                    Rp
                    {{ number_format($this->totalPrice, 0, ',', '.') }}
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
