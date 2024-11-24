<div x-data="{ open: false }" class="md:sticky md:top-0 md:self-start">
    <!-- Mobile Navbar Toggle -->
    <button @click="open = !open" class="absolute top-0 right-0 p-4 text-gray-700 bg-white rounded-full lg:hidden">
        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
    </button>

    <!-- Mobile Sidebar -->
    <aside :class="open ? 'translate-x-0' : '-translate-x-full'"
        class="fixed inset-y-0 z-20 transition-transform duration-300 transform -translate-x-full bg-white border-r shadow-md md:relative md:translate-x-0 md:w-64 md:shadow-none">
        <div class="min-h-screen px-6 py-4">
            <h2 class="mb-4 text-xl font-semibold text-gray-800">{{ Auth::user()->name }}</h2>
            <span class="space-y-2">
                <x-nav-admin-link :href="route('manage.index')" :active="request()->routeIs('manage.index')">
                    {{ __('Dashboard') }}
                </x-nav-admin-link>
                <x-nav-admin-link :href="route('manage.category.index')" :active="request()->routeIs('manage.category.index')">
                    {{ __('Category') }}
                </x-nav-admin-link>
                <x-nav-admin-link :href="route('manage.products.index')" :active="request()->routeIs('manage.products.index')">
                    {{ __('Products') }}
                </x-nav-admin-link>
                <x-nav-admin-link :href="route('manage.shops.index')" :active="request()->routeIs('manage.shops.index')">
                    {{ __('Shop') }}
                </x-nav-admin-link>
                <x-nav-admin-link :href="route('manage.users.index')" :active="request()->routeIs('manage.users.index')">
                    {{ __('User') }}
                </x-nav-admin-link>
                <x-nav-admin-link :href="route('manage.roles.index')" :active="request()->routeIs('manage.roles.index')">
                    {{ __('Role') }}
                </x-nav-admin-link>
                <x-nav-admin-link :href="route('manage.thumbnail.index')" :active="request()->routeIs('manage.thumbnail.index')">
                    {{ __('Setting') }}
                </x-nav-admin-link>
                <x-nav-admin-link :href="route('index')" :active="request()->routeIs('index')">
                    {{ __('Back') }}
                </x-nav-admin-link>
            </span>
        </div>
    </aside>

    <!-- Overlay (for mobile) -->
    <div @click="open = false" x-show="open" x-cloak class="absolute inset-0 bg-black bg-opacity-50 lg:hidden">
    </div>
</div>
