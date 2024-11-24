<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\RiviewProduct;
use Livewire\Attributes\Computed;

class RiviewList extends Component
{
    use WithPagination;

    public $productId;
    public $loadPage = 2;
    public $totalRiviews;

    public function mount($productId)
    {
        $this->productId = $productId;
        $this->totalRiviews = RiviewProduct::where('product_id', $this->productId)->count();
    }

    public function loadMore()
    {
        $this->loadPage += 10;
    }

    #[Computed()]
    public function riviews()
    {
        return RiviewProduct::where('product_id', $this->productId)->take($this->loadPage)->get();
    }

    public function render()
    {
        return view('livewire.riview-list');
    }
}
