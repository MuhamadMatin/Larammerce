<div>
    <div class="flex flex-wrap gap-5 mt-4">
        @include('components.shop.shop-page', ['shops' => $this->shops])
    </div>
    @if ($pagination)
        <div class="my-3">
            {{ $this->shops->onEachSide(1)->links('vendor.livewire.tailwind', data: ['scrollTo' => false]) }}
        </div>
    @endif
</div>
