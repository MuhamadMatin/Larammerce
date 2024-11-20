<x-app-layout>
    <livewire:product-list :products="$products" :pagination="true" />
    @forelse ($products as $product)
    @empty
        <p>empty</p>
    @endforelse
</x-app-layout>
