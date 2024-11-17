<div x-data="{ open: false }">
    <!-- Mobile Navbar Toggle -->
    <div class="lg:hidden">
        <button @click="open = !open" class="p-4 text-gray-700">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
        <span class="space-y-2">
            <a href="#"
                class="flex items-center px-4 py-2 text-gray-700 transition bg-gray-200 rounded hover:bg-blue-500 hover:text-white">
                <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </a>

            <a href="#"
                class="flex items-center px-4 py-2 text-gray-700 transition rounded hover:bg-blue-500 hover:text-white">
                <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 10h4m-4 0v6m0-6l-3 3m3-3l3 3m-3-3h6m-6 0v6m0-6l3 3m-3-3l-3 3m3-3H8" />
                </svg>
            </a>
            <a href="#"
                class="flex items-center px-4 py-2 text-gray-700 transition rounded hover:bg-blue-500 hover:text-white">
                <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5h6m-3 4v10m0-10l3 3m-3-3l-3 3" />
                </svg>
            </a>
            <a wire:navigate href="{{ route('index') }}"
                class="flex items-center px-4 py-2 text-gray-700 transition rounded hover:bg-blue-500 hover:text-white">
                <svg class="w-6 h-6 mr-2 stroke-black" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M15 12L2 12M2 12L5.5 9M2 12L5.5 15" stroke="" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                        <path
                            d="M9.00195 7C9.01406 4.82497 9.11051 3.64706 9.87889 2.87868C10.7576 2 12.1718 2 15.0002 2L16.0002 2C18.8286 2 20.2429 2 21.1215 2.87868C22.0002 3.75736 22.0002 5.17157 22.0002 8L22.0002 16C22.0002 18.8284 22.0002 20.2426 21.1215 21.1213C20.3531 21.8897 19.1752 21.9862 17 21.9983M9.00195 17C9.01406 19.175 9.11051 20.3529 9.87889 21.1213C10.5202 21.7626 11.4467 21.9359 13 21.9827"
                            stroke="" stroke-width="1.5" stroke-linecap="round"></path>
                    </g>
                </svg>
            </a>
        </span>
    </div>

    <!-- Mobile Sidebar -->
    <aside :class="open ? 'translate-x-0' : '-translate-x-full'"
        class="fixed inset-y-0 z-20 w-64 transition-transform duration-300 transform bg-white border-r shadow-md lg:translate-x-0 lg:static lg:shadow-none">
        <div class="min-h-screen px-6 py-4">
            <h2 class="mb-4 text-xl font-semibold text-gray-800">{{ Auth::user()->name }}</h2>
            <span class="space-y-2">
                <a href="#"
                    class="flex items-center px-4 py-2 text-gray-700 transition bg-gray-200 rounded hover:bg-blue-500 hover:text-white">
                    <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    Dashboard
                </a>
                <x-nav-admin-link :href="route('manage.index')" :active="request()->routeIs('manage.index')">
                    <svg class="w-6 h-6 mr-2 stroke-black group-hover:stroke-white group-focus:stroke-orange-500"
                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M15 12L2 12M2 12L5.5 9M2 12L5.5 15" stroke="" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                                d="M9.00195 7C9.01406 4.82497 9.11051 3.64706 9.87889 2.87868C10.7576 2 12.1718 2 15.0002 2L16.0002 2C18.8286 2 20.2429 2 21.1215 2.87868C22.0002 3.75736 22.0002 5.17157 22.0002 8L22.0002 16C22.0002 18.8284 22.0002 20.2426 21.1215 21.1213C20.3531 21.8897 19.1752 21.9862 17 21.9983M9.00195 17C9.01406 19.175 9.11051 20.3529 9.87889 21.1213C10.5202 21.7626 11.4467 21.9359 13 21.9827"
                                stroke="" stroke-width="1.5" stroke-linecap="round"></path>
                        </g>
                    </svg>
                    {{ __('Dashboard') }}
                    <a href="#"
                        class="flex items-center px-4 py-2 text-gray-700 transition rounded hover:bg-blue-500 hover:text-white">
                        <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 10h4m-4 0v6m0-6l-3 3m3-3l3 3m-3-3h6m-6 0v6m0-6l3 3m-3-3l-3 3m3-3H8" />
                        </svg>
                        Users
                    </a>
                    <a href="#"
                        class="flex items-center px-4 py-2 text-gray-700 transition rounded hover:bg-blue-500 hover:text-white">
                        <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5h6m-3 4v10m0-10l3 3m-3-3l-3 3" />
                        </svg>
                        Settings
                    </a>
                </x-nav-admin-link>
                <a wire:navigate href="{{ route('index') }}"
                    class="flex items-center px-4 py-2 text-gray-700 transition rounded hover:bg-blue-500 hover:text-white">
                    <svg class="w-6 h-6 mr-2 stroke-black" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M15 12L2 12M2 12L5.5 9M2 12L5.5 15" stroke="" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                                d="M9.00195 7C9.01406 4.82497 9.11051 3.64706 9.87889 2.87868C10.7576 2 12.1718 2 15.0002 2L16.0002 2C18.8286 2 20.2429 2 21.1215 2.87868C22.0002 3.75736 22.0002 5.17157 22.0002 8L22.0002 16C22.0002 18.8284 22.0002 20.2426 21.1215 21.1213C20.3531 21.8897 19.1752 21.9862 17 21.9983M9.00195 17C9.01406 19.175 9.11051 20.3529 9.87889 21.1213C10.5202 21.7626 11.4467 21.9359 13 21.9827"
                                stroke="" stroke-width="1.5" stroke-linecap="round"></path>
                        </g>
                    </svg>
                    Back
                </a>
            </span>
        </div>
    </aside>

    <!-- Overlay (for mobile) -->
    <div @click="open = false" x-show="open" x-cloak class="fixed inset-0 bg-black bg-opacity-50 lg:hidden">
    </div>
</div>
