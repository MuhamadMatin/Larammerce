<div class="flex flex-col justify-end gap-y-5">
    <span class="flex items-center justify-end space-x-2">
        <button class="px-2 py-1 border rounded" wire:click="minusItemCart" wire:loading.attr="disabled">-</button>
        <p>{{ $this->productItem->pivot->qty }}</p>
        {{-- <input type="number" wire:model.blut="$this->productItem->pivot->qty" value="{{ $this->productItem->pivot->qty }}"
            min="1" class="w-16 text-center border rounded" disabled /> --}}
        <button class="px-2 py-1 border rounded" wire:click="plusItemCart" wire:loading.attr="disabled">+</button>
    </span>
    <span class="flex justify-end">
        <svg class="w-8 h-8 fill-red-500" wire:click="deleteItemCart"></svg>
    </span>
</div>
