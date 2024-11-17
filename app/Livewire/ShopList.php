<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Shop;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class ShopList extends Component
{
    use WithPagination;

    #[Url()]
    public $search = '';
    public $pagination = true;

    public function mount($pagination = true)
    {
        $this->pagination = $pagination;
        // $this->resetPage();
    }

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
        $this->resetPage();
    }

    public function resetAll()
    {
        $this->reset('search');
        // $this->reset('category');
        $this->resetPage();
        $this->dispatch('resetAll');
    }

    #[Computed()]
    public function shops()
    {
        $query = Shop::when($this->search, function ($query) {
            return $query->where('name', 'like', '%' . $this->search . '%');
        });;

        return $this->pagination ? $query->paginate(20) : $query->limit(20)->get();
    }

    public function render()
    {
        return view('livewire.shop-list');
    }
}
