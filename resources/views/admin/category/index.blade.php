<x-admin-layout>
    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
        @forelse ($categories as $category)
            <div class="p-5 bg-white rounded-md">
                <h1 class="font-semibold">Catgeory: {{ $category->name }}</h1>
                <span class="flex justify-end mt-4 gap-x-2">
                    <a wire:navigate
                        class="px-6 py-2 text-white duration-150 rounded-md bg-blueDarker hover:bg-orangeDark"
                        href="">Edit</a>
                    <a wire:navigate
                        class="px-6 py-2 text-white duration-150 rounded-md bg-blueDarker hover:bg-orangeDark"
                        href="">Delete</a>
                </span>
            </div>
        @empty
            <p>empty</p>
        @endforelse
    </div>
</x-admin-layout>
