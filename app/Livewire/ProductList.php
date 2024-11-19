<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class ProductList extends Component
{
    use WithPagination;

    #[Url()]
    public $search = '';
    public $category = '';
    public $product = '';
    public $shop = null;
    public $pagination = true;

    public function mount($shopId = null, $pagination = true)
    {
        $this->shop = $shopId;
        $this->pagination = $pagination;
        // $this->resetPage();
    }

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
        $this->resetPage();
    }

    #[On('category')]
    public function updateCategory($category)
    {
        $this->category = $category;
        $this->resetPage();
    }

    public function resetAll()
    {
        $this->dispatch('resetAll');
        $this->resetPage();
        $this->reset(['search', 'category']);
        $this->resetPage('product_page');
        $this->resetPage('shop_page');
    }

    #[Computed()]
    public function products()
    {
        $query = Product::with('riview', 'shop')
            ->where('name', 'like', '%' . $this->search . '%')
            ->when($this->shop, function ($query) {
                return $query->where('shop_id', $this->shop);
            })
            ->when($this->category, function ($query) {
                return $query->where('category_id', $this->category);
            });

        return $this->pagination ? $query->paginate(20, pageName: 'product_page') : $query->limit(20)->get();
    }

    public function render()
    {
        return view('livewire.product-list');
    }
}
