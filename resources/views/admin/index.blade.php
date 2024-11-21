<x-admin-layout>
    <main class="container py-5 mx-auto">
        <div class="grid grid-cols-1 gap-6 m-6 md:grid-cols-2 lg:grid-cols-4">
            <div class="flex flex-col items-center p-6 bg-white rounded-lg shadow-lg">
                <x-nav-link href="{{ route('manage.products.index') }}" :active="request()->routeIs('manage.products.index')" class="text-lg font-semibold">
                    {{ __('Products') }}
                </x-nav-link>
                <span class="flex items-center mt-3">
                    <svg class="w-8 h-8 fill-black" fill="" viewBox="0 0 32 32" id="icon"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: none;
                                    }
                                </style>
                            </defs>
                            <title>product</title>
                            <rect x="8" y="18" width="6" height="2"></rect>
                            <rect x="8" y="22" width="10" height="2"></rect>
                            <path
                                d="M26,4H6A2.0025,2.0025,0,0,0,4,6V26a2.0025,2.0025,0,0,0,2,2H26a2.0025,2.0025,0,0,0,2-2V6A2.0025,2.0025,0,0,0,26,4ZM18,6v4H14V6ZM6,26V6h6v6h8V6h6l.0012,20Z">
                            </path>
                            <rect id="_Transparent_Rectangle_" data-name="<Transparent Rectangle>" class="cls-1"
                                width="32" height="32"></rect>
                        </g>
                    </svg>
                    <p class="ml-3 text-3xl font-bold">{{ $products }}</p>
                </span>
            </div>

            <div class="flex flex-col items-center p-6 bg-white rounded-lg shadow-lg">
                <x-nav-link href="{{ route('manage.shops.index') }}" :active="request()->routeIs('manage.shops.index')" class="text-lg font-semibold">
                    {{ __('Shop') }}
                </x-nav-link>
                <span class="flex items-center mt-3">
                    <svg class="w-8 h-8 stroke-black" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M22 22H2" stroke="" stroke-width="1.5" stroke-linecap="round"></path>
                            <path d="M20 22V11" stroke="" stroke-width="1.5" stroke-linecap="round"></path>
                            <path d="M4 22V11" stroke="" stroke-width="1.5" stroke-linecap="round"></path>
                            <path
                                d="M16.5278 2H7.47214C6.26932 2 5.66791 2 5.18461 2.2987C4.7013 2.5974 4.43234 3.13531 3.89443 4.21114L2.49081 7.75929C2.16652 8.57905 1.88279 9.54525 2.42867 10.2375C2.79489 10.7019 3.36257 11 3.99991 11C5.10448 11 5.99991 10.1046 5.99991 9C5.99991 10.1046 6.89534 11 7.99991 11C9.10448 11 9.99991 10.1046 9.99991 9C9.99991 10.1046 10.8953 11 11.9999 11C13.1045 11 13.9999 10.1046 13.9999 9C13.9999 10.1046 14.8953 11 15.9999 11C17.1045 11 17.9999 10.1046 17.9999 9C17.9999 10.1046 18.8953 11 19.9999 11C20.6373 11 21.205 10.7019 21.5712 10.2375C22.1171 9.54525 21.8334 8.57905 21.5091 7.75929L20.1055 4.21114C19.5676 3.13531 19.2986 2.5974 18.8153 2.2987C18.332 2 17.7306 2 16.5278 2Z"
                                stroke="" stroke-width="1.5" stroke-linejoin="round"></path>
                            <path
                                d="M9.5 21.5V18.5C9.5 17.5654 9.5 17.0981 9.70096 16.75C9.83261 16.522 10.022 16.3326 10.25 16.201C10.5981 16 11.0654 16 12 16C12.9346 16 13.4019 16 13.75 16.201C13.978 16.3326 14.1674 16.522 14.299 16.75C14.5 17.0981 14.5 17.5654 14.5 18.5V21.5"
                                stroke="" stroke-width="1.5" stroke-linecap="round"></path>
                        </g>
                    </svg>
                    <p class="ml-3 text-3xl font-bold">{{ $shops }}</p>
                </span>
            </div>

            <div class="flex flex-col items-center p-6 bg-white rounded-lg shadow-lg">
                <x-nav-link href="{{ route('manage.category.index') }}" :active="request()->routeIs('manage.category.index')" class="text-lg font-semibold">
                    {{ __('Category') }}
                </x-nav-link>
                <span class="flex items-center mt-3">
                    <svg class="w-8 h-8 stroke-black" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M5 10H7C9 10 10 9 10 7V5C10 3 9 2 7 2H5C3 2 2 3 2 5V7C2 9 3 10 5 10Z"
                                stroke="" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M17 10H19C21 10 22 9 22 7V5C22 3 21 2 19 2H17C15 2 14 3 14 5V7C14 9 15 10 17 10Z"
                                stroke="" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path
                                d="M17 22H19C21 22 22 21 22 19V17C22 15 21 14 19 14H17C15 14 14 15 14 17V19C14 21 15 22 17 22Z"
                                stroke="" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M5 22H7C9 22 10 21 10 19V17C10 15 9 14 7 14H5C3 14 2 15 2 17V19C2 21 3 22 5 22Z"
                                stroke="" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <p class="ml-3 text-3xl font-bold">{{ $categories }}</p>
                </span>
            </div>

            <div class="flex flex-col items-center p-6 bg-white rounded-lg shadow-lg">
                <x-nav-link href="{{ route('manage.users.index') }}" :active="request()->routeIs('manage.users.index')" class="text-lg font-semibold">
                    {{ __('User') }}
                </x-nav-link>
                <span class="flex items-center mt-3">
                    <svg class="w-8 h-8 text-purple-500" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="#000000"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <p class="ml-3 text-3xl font-bold">{{ $users }}</p>
                </span>
            </div>

            <div class="flex flex-col items-center p-6 bg-white rounded-lg shadow-lg">
                <x-nav-link href="{{ route('manage.thumbnail.index') }}" :active="request()->routeIs('manage.thumbnail.index')"
                    class="text-lg font-semibold">
                    {{ __('Thumbnail') }}
                </x-nav-link>
                <span class="flex items-center mt-3">
                    <svg class="w-10 h-10 stroke-black" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M3 8.2C3 7.07989 3 6.51984 3.21799 6.09202C3.40973 5.71569 3.71569 5.40973 4.09202 5.21799C4.51984 5 5.0799 5 6.2 5H17.8C18.9201 5 19.4802 5 19.908 5.21799C20.2843 5.40973 20.5903 5.71569 20.782 6.09202C21 6.51984 21 7.0799 21 8.2V10.8C21 11.9201 21 12.4802 20.782 12.908C20.5903 13.2843 20.2843 13.5903 19.908 13.782C19.4802 14 18.9201 14 17.8 14H6.2C5.07989 14 4.51984 14 4.09202 13.782C3.71569 13.5903 3.40973 13.2843 3.21799 12.908C3 12.4802 3 11.9201 3 10.8V8.2Z"
                                stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path d="M9 18H10V19H9V18Z" stroke="" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M14 18H15V19H14V18Z" stroke="" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M19 18H20V19H19V18Z" stroke="" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M4 18H5V19H4V18Z" stroke="" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <p class="ml-3 text-3xl font-bold">{{ $thumbnails }}</p>
                </span>
            </div>

            <div class="flex flex-col items-center p-6 bg-white rounded-lg shadow-lg">
                <x-nav-link href="{{ route('manage.roles.index') }}" :active="request()->routeIs('manage.roles.index')" class="text-lg font-semibold">
                    {{ __('Roles') }}
                </x-nav-link>
                <span class="flex items-center mt-3">
                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M4 21C4 17.4735 6.60771 14.5561 10 14.0709M19.8726 15.2038C19.8044 15.2079 19.7357 15.21 19.6667 15.21C18.6422 15.21 17.7077 14.7524 17 14C16.2923 14.7524 15.3578 15.2099 14.3333 15.2099C14.2643 15.2099 14.1956 15.2078 14.1274 15.2037C14.0442 15.5853 14 15.9855 14 16.3979C14 18.6121 15.2748 20.4725 17 21C18.7252 20.4725 20 18.6121 20 16.3979C20 15.9855 19.9558 15.5853 19.8726 15.2038ZM15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7Z"
                                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </g>
                    </svg>
                    <p class="ml-3 text-3xl font-bold">{{ $roles }}</p>
                </span>
            </div>
        </div>
    </main>
</x-admin-layout>
