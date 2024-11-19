<x-admin-layout>
    @forelse ($thumbnails as $thumbnail)
        {{ $thumbnail }}
    @empty
        <p>empty</p>
    @endforelse
</x-admin-layout>
