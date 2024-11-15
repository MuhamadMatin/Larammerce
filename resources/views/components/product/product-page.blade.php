@foreach ($products as $product)
    <div class="flex-none w-full md:w-64">
        <img src="{{ $product->thumnail }}" alt="{{ $product->name }}" class="object-cover w-full h-48 rounded-t-md">
        <div class="p-4 bg-white rounded-b-lg shadow-md">
            <a wire:navigate href="{{ route('show', ['shop' => $product->shop->slug, 'product' => $product->slug]) }}"
                class="font-semibold text-gray-800">{{ Str::limit($product->name, 20) }}</a>
            <div class="flex items-center justify-between mt-2">
                <p class="text-sm font-semibold text-gray-900">Rp
                    {{ number_format($product->price, 0, ',', '.') }}</p>
                <div class="flex items-center text-yellow-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor">
                        <path
                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                    </svg>
                    <span class="ml-1 text-gray-600">{{ $product->calcStar() }}</span>
                </div>
            </div>
        </div>
    </div>
@endforeach
