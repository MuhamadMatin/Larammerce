<x-admin-layout>
    @forelse ($categories as $category)
        {{ $category }}
    @empty
        <p>empty</p>
    @endforelse
</x-admin-layout>
