<x-admin-layout>
    @forelse ($products as $product)
        {{ $product }}
    @empty
        <p>empty</p>
    @endforelse
</x-admin-layout>
