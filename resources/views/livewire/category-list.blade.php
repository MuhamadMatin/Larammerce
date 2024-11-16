<div class="overflow-x-auto no-scrollbar">
    <ul class="flex items-center justify-center cursor-pointer md:justify-start gap-x-5">
        @forelse ($categories as $categor)
            <li wire:click="$set('category', {{ $categor->id }})"
                class="px-4 py-2 text-center border-2 rounded-full whitespace-nowrap no-scrollbar 
                {{ $categor->id === $category ? 'border-orangeDark text-blueDarker' : 'border-gray-300' }}">
                {{ $categor->name }}
            </li>
        @empty
            <p class="px-4 py-2 text-center border-2 rounded-full">Category empty</p>
        @endforelse
    </ul>
</div>
