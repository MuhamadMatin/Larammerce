<div class="mt-4">
    @if ($search || $category)
        <div class="flex items-center mt-3 gap-x-2">
            <button class="text-2xl font-bold" wire:click='resetAll()'>
                <svg class="w-4 h-4" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 460.775 460.775" xml:space="preserve">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M285.08,230.397L456.218,59.27c6.076-6.077,6.076-15.911,0-21.986L423.511,4.565c-2.913-2.911-6.866-4.55-10.992-4.55 c-4.127,0-8.08,1.639-10.993,4.55l-171.138,171.14L59.25,4.565c-2.913-2.911-6.866-4.55-10.993-4.55 c-4.126,0-8.08,1.639-10.992,4.55L4.558,37.284c-6.077,6.075-6.077,15.909,0,21.986l171.138,171.128L4.575,401.505 c-6.074,6.077-6.074,15.911,0,21.986l32.709,32.719c2.911,2.911,6.865,4.55,10.992,4.55c4.127,0,8.08-1.639,10.994-4.55 l171.117-171.12l171.118,171.12c2.913,2.911,6.866,4.55,10.993,4.55c4.128,0,8.081-1.639,10.992-4.55l32.709-32.719 c6.074-6.075,6.074-15.909,0-21.986L285.08,230.397z">
                        </path>
                    </g>
                </svg>
            </button>
            <div class="flex flex-col gap-x-2">
                <span>
                    @if ($search)
                        Searcing: {{ $search }}
                    @endif
                </span>
                <span>
                    @if ($category)
                        Searcing: {{ $category }}
                    @endif
                </span>
            </div>
        </div>
    @endif
    <div class="grid flex-wrap w-full grid-cols-2 gap-5 mt-4 md:flex">
        @include('components.product.product-page', ['products' => $this->products])
    </div>
    @if ($pagination)
        <div class="my-3">
            {{ $this->products->onEachSide(1)->links('vendor.livewire.tailwind', data: ['scrollTo' => false]) }}
        </div>
    @endif
</div>
