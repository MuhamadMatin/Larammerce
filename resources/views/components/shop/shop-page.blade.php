@forelse ($shops as $shop)
    <div class="flex-none p-5 mx-auto shadow-md md:w-64">
        <span class="flex items-center gap-x-3">
            <img class="object-cover rounded-full w-14 h-14" src="{{ $shop->image }}" alt="{{ $shop->name }}"
                loading='lazy'>
            <p class="text-blueDarker">{{ $shop->name }}</p>
        </span>
        <span class="flex items-center mt-2 text-sm gap-x-1">
            <svg class="w-4 h-4" viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" fill="none">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path stroke="#000000" stroke-width="12"
                        d="M96 22a51.88 51.88 0 0 0-36.77 15.303A52.368 52.368 0 0 0 44 74.246c0 16.596 4.296 28.669 20.811 48.898a163.733 163.733 0 0 1 20.053 28.38C90.852 163.721 90.146 172 96 172c5.854 0 5.148-8.279 11.136-20.476a163.723 163.723 0 0 1 20.053-28.38C143.704 102.915 148 90.841 148 74.246a52.37 52.37 0 0 0-15.23-36.943A51.88 51.88 0 0 0 96 22Z">
                    </path>
                    <circle cx="96" cy="74" r="20" stroke="#000000" stroke-width="12"></circle>
                </g>
            </svg>
            <p class="text-gray-700 ">{{ $shop->city }}</p>
        </span>
    </div>
@empty
    <p>empty</p>
@endforelse
