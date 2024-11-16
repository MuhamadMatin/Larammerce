<x-app-layout>
    <!-- Carousel Thumbnail Section -->
    <div x-data="{ index: 0, auto: true }" x-init="setInterval(() => auto && (index = (index + 1) % {{ count($thumbnails) }}), 25000)" class="p-6">
        <div class="relative h-96">
            @foreach ($thumbnails as $i => $thumbnail)
                <img x-show="index === {{ $i }}" src="{{ $thumbnail->image }}"
                    alt="Thumbnail {{ $i }}"
                    class="absolute inset-0 object-cover w-full h-full transition-opacity duration-700 ease-in-out rounded-lg"
                    x-transition>
            @endforeach
            <!-- Indicators btn -->
            <div class="absolute bottom-0 left-0 right-0 flex justify-center p-4 space-x-2">
                @foreach ($thumbnails as $i => $thumbnail)
                    <button @click="index = {{ $i }}; auto = false"
                        :class="{
                            'bg-blueDark': index === {{ $i }},
                            'bg-gray-400': index !==
                                {{ $i }}
                        }"
                        class="w-3 h-3 rounded-full"></button>
                @endforeach
            </div>
            <!-- Controls arrow -->
            <button @click="index = (index - 1 + {{ count($thumbnails) }}) % {{ count($thumbnails) }}"
                class="absolute left-0 px-4 py-2 text-white bg-gray-800 bg-opacity-50 rounded-full md:left-5 bottom-1/2">
                &lt;
            </button>
            <button @click="index = (index + 1) % {{ count($thumbnails) }}"
                class="absolute right-0 px-4 py-2 text-white bg-opacity-50 rounded-full bg-blueDark md:right-5 bottom-1/2">
                &gt;
            </button>
        </div>
    </div>

    <div class="my-20 md:mx-10">
        <div class="flex items-center mb-4 gap-x-6">
            <h3 class="text-3xl font-semibold text-gray-800">News Products</h3>
            <a wire:navigate href="{{ route('shopping') }}">
                <span class="flex items-center gap-1 cursor-pointer w-fit group">
                    <p>See more</p>
                    <svg class="w-5 h-5 duration-150 group-hover:-translate-x-1 stroke-black group-hover:fill-orangeDark group-hover:stroke-orangeDark"
                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M5 12H19M19 12L13 6M19 12L13 18" stroke="" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </span>
            </a>
        </div>
        <div class="flex overflow-x-auto no-scrollbar gap-x-6">
            @include('components.product.product-page', ['products' => $products])
        </div>
    </div>

    <div class="my-20 md:mx-10">
        <div class="flex items-center mb-4 gap-x-4">
            <h3 class="text-3xl font-semibold text-gray-800">Under 50k</h3>
            <a wire:navigate href="{{ route('shopping') }}">
                <span class="flex items-center gap-1 cursor-pointer w-fit group">
                    <p>See more</p>
                    <svg class="w-5 h-5 duration-150 group-hover:-translate-x-1 stroke-black group-hover:fill-orangeDark group-hover:stroke-orangeDark"
                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M5 12H19M19 12L13 6M19 12L13 18" stroke="" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </span>
            </a>
        </div>
        <div class="flex overflow-x-auto no-scrollbar gap-x-6">
            @include('components.product.product-page', ['products' => $unders])
        </div>
    </div>

    <div class="my-20 md:mx-10">
        <livewire:category-list />
        <livewire:product-list :products="$products" />
    </div>
</x-app-layout>
