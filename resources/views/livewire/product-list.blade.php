<div class="mt-4">
    <div class="flex flex-wrap w-full gap-5 ">
        @include('components.product.product-page', ['products' => $this->products])
    </div>
    <div class="my-3">
        {{ $this->products->onEachSide(1)->links(data: ['scrollTo' => false]) }}
    </div>
</div>
