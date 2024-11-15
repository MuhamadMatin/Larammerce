<x-app-layout>
    <div class="container p-6 mx-auto">
        <div class="flex flex-col gap-6 md:flex-row">
            <!-- Images Section -->
            <div class="w-full place-self-start md:w-1/2 md:sticky md:top-4">
                <div class="mb-4">
                    <img id="mainImage" src="{{ $product->thumnail }}" alt="{{ $product->name }}"
                        class="object-cover w-full h-48 rounded-lg shadow-lg md:h-96">
                </div>
                <div class="flex space-x-2 overflow-x-auto no-scrollbar">
                    @foreach ($product->images as $image)
                        <img src="{{ $image->image }}" alt="{{ $product->name }}"
                            class="object-cover w-20 h-20 border border-gray-300 rounded cursor-pointer hover:border-blue-500"
                            onclick="
                            document.getElementById('mainImage').src = '{{ $image->image }}'
                            "
                            loading="lazy">
                    @endforeach
                </div>
            </div>

            <!-- Product Info Section -->
            <div class="w-full md:w-1/2">
                <h1 class="text-3xl font-semibold text-gray-800">{{ $product->name }}</h1>
                <div>
                    <span class="flex items-center mt-2 gap-x-2">
                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M3.5 11V14C3.5 17.7712 3.5 19.6569 4.67157 20.8284C5.84315 22 7.72876 22 11.5 22H12.5C16.2712 22 18.1569 22 19.3284 20.8284C20.5 19.6569 20.5 17.7712 20.5 14V11"
                                    stroke="#000" stroke-width="1.5"></path>
                                <path
                                    d="M9.4998 2H14.4998L15.1515 8.51737C15.338 10.382 13.8737 12 11.9998 12C10.1259 12 8.6616 10.382 8.84806 8.51737L9.4998 2Z"
                                    stroke="#000" stroke-width="1.5"></path>
                                <path
                                    d="M3.32975 5.35133C3.50783 4.46093 3.59687 4.01573 3.77791 3.65484C4.15938 2.89439 4.84579 2.33168 5.66628 2.10675C6.05567 2 6.50969 2 7.41771 2H9.50002L8.77549 9.24527C8.61911 10.8091 7.30318 12 5.73155 12C3.8011 12 2.35324 10.2339 2.73183 8.34093L3.32975 5.35133Z"
                                    stroke="#000" stroke-width="1.5"></path>
                                <path
                                    d="M20.6703 5.35133C20.4922 4.46093 20.4031 4.01573 20.2221 3.65484C19.8406 2.89439 19.1542 2.33168 18.3337 2.10675C17.9443 2 17.4903 2 16.5823 2H14.5L15.2245 9.24527C15.3809 10.8091 16.6968 12 18.2685 12C20.1989 12 21.6468 10.2339 21.2682 8.34093L20.6703 5.35133Z"
                                    stroke="#000" stroke-width="1.5"></path>
                                <path
                                    d="M9.5 21.5V18.5C9.5 17.5654 9.5 17.0981 9.70096 16.75C9.83261 16.522 10.022 16.3326 10.25 16.201C10.5981 16 11.0654 16 12 16C12.9346 16 13.4019 16 13.75 16.201C13.978 16.3326 14.1674 16.522 14.299 16.75C14.5 17.0981 14.5 17.5654 14.5 18.5V21.5"
                                    stroke="#000" stroke-width="1.5" stroke-linecap="round"></path>
                            </g>
                        </svg>
                        <p class="text-lg font-semibold text-gray-700">{{ $product->shop->name }}</p>
                    </span>
                    <div class="flex items-center mt-4 gap-x-2">
                        <p class="text-xl font-bold text-gray-900">Rp
                            {{ number_format($product->price, 0, ',', '.') }}
                        </p>
                        <span class="flex items-center text-yellow-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <p class="ml-1 text-gray-600">{{ $product->avgRating }}</p>
                        </span>
                    </div>
                </div>


                <!-- Product Description -->
                <p class="mt-6 text-gray-600">{{ $product->desk }}</p>

                <!-- Reviews Section -->
                <div class="mt-8">
                    <h2 class="text-xl font-semibold text-gray-800">Customer Reviews</h2>
                    <div class="mt-4 space-y-4">
                        @foreach ($product->riview as $review)
                            <div class="pb-4 border-b">
                                <p class="text-gray-700"><strong>{{ $review->user->name }}</strong> rated:
                                    {{ $review->star }} / 5</p>
                                <p class="text-gray-600">{{ $review->comment }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
