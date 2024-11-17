<x-app-layout>
    <div class="mx-8">
        <div class="my-3">
            <h1 class="text-3xl font-semibold">Let's see we're products</h1>
            <p class="text-sm text-slate-600">Click category and see the magic 🪄</p>
        </div>
        <livewire:search />
        <livewire:category-list />
        <livewire:product-list :products="$products" :pagination="true" />
        <livewire:shop-list :shops="$shops" :pagination="true" />
    </div>
</x-app-layout>
