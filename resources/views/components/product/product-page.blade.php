@forelse ($products as $product)
    <div class="flex-none w-full mx-auto md:w-64">
        <img src="{{ $product->thumnail }}" alt="{{ $product->name }}" class="object-cover w-full h-48 rounded-t-md"
            loading="lazy">
        <div class="p-4 bg-white rounded-b-lg shadow-md">
            <a wire:navigate href="{{ route('show', ['shop' => $product->shop->slug, 'product' => $product->slug]) }}"
                class="font-semibold text-gray-800">{{ Str::limit($product->name, 20) }}
            </a>
            <div class="flex items-center justify-between mt-2">
                <p class="text-sm font-semibold text-gray-900">Rp
                    {{ number_format($product->price, 0, ',', '.') }}</p>
                <div class="flex items-center text-yellow-400">
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path class="fill-yellow-400"
                                d="M11.5245 3.46353C11.6741 3.00287 12.3259 3.00287 12.4755 3.46353L14.1329 8.56434C14.1998 8.77035 14.3918 8.90983 14.6084 8.90983H19.9717C20.4561 8.90983 20.6575 9.52964 20.2656 9.81434L15.9266 12.9668C15.7514 13.0941 15.678 13.3198 15.745 13.5258L17.4023 18.6266C17.552 19.0873 17.0248 19.4704 16.6329 19.1857L12.2939 16.0332C12.1186 15.9059 11.8814 15.9059 11.7061 16.0332L7.3671 19.1857C6.97524 19.4704 6.448 19.0873 6.59768 18.6266L8.25503 13.5258C8.32197 13.3198 8.24864 13.0941 8.07339 12.9668L3.73438 9.81434C3.34253 9.52964 3.54392 8.90983 4.02828 8.90983H9.39159C9.6082 8.90983 9.80018 8.77035 9.86712 8.56434L11.5245 3.46353Z"
                                fill="none"></path>
                        </g>
                    </svg>
                    <span class="ml-1 text-gray-600">{{ $product->calcStar() }}</span>
                </div>
            </div>
        </div>
    </div>
@empty
    <span class="flex flex-col items-center mx-auto">
        <svg class="rotate-45 fill-blueDarker" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path
                    d="M22.7399 6.32717C24.3781 8.48282 24.2132 11.571 22.2453 13.5389L20.3007 15.4835C20.0078 15.7764 19.533 15.7764 19.2401 15.4835L12.5226 8.76595C12.2297 8.47306 12.2297 7.99818 12.5226 7.70529L14.4671 5.76075C16.4352 3.79268 19.5237 3.62792 21.6793 5.26646L24.7238 2.22166C25.0167 1.92875 25.4916 1.92873 25.7845 2.22161C26.0774 2.51449 26.0774 2.98936 25.7845 3.28227L22.7399 6.32717ZM19.7704 13.8925L21.1846 12.4783C22.7467 10.9162 22.7467 8.3835 21.1846 6.82141C19.6225 5.25931 17.0899 5.25931 15.5278 6.82141L14.1135 8.23562L19.7704 13.8925Z"
                    fill=""></path>
                <path
                    d="M12.7778 11.215C13.0707 11.5079 13.0707 11.9828 12.7778 12.2757L10.6514 14.402L13.5982 17.3489L15.7238 15.2234C16.0167 14.9305 16.4916 14.9305 16.7844 15.2234C17.0773 15.5163 17.0773 15.9912 16.7844 16.284L14.6589 18.4095L15.4858 19.2364C15.7787 19.5293 15.7787 20.0042 15.4858 20.2971L13.5412 22.2416C11.5732 24.2096 8.48484 24.3745 6.32918 22.7361L3.28475 25.7808C2.99187 26.0737 2.517 26.0737 2.22409 25.7808C1.93118 25.488 1.93116 25.0131 2.22404 24.7202L5.26853 21.6754C3.63025 19.5197 3.79509 16.4314 5.76306 14.4635L7.7076 12.5189C8.0005 12.226 8.47537 12.226 8.76826 12.5189L9.59072 13.3414L11.7172 11.215C12.0101 10.9221 12.485 10.9221 12.7778 11.215ZM6.83028 21.1875C8.3929 22.7431 10.9207 22.7409 12.4806 21.181L13.8948 19.7668L8.23793 14.1099L6.82372 15.5241C5.26383 17.084 5.26163 19.6117 6.81709 21.1743L6.82366 21.1808L6.83028 21.1875Z"
                    fill=""></path>
            </g>
        </svg>
        <p class="mt-1 font-semibold text-center text-blueDark">Product empty</p>
    </span>
@endforelse
