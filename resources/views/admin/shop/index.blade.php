<x-admin-layout>
    @forelse ($shops as $shop)
        {{ $shop }}
    @empty
        <p>empty</p>
    @endforelse
</x-admin-layout>
