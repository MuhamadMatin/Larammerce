<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Attributes\Computed;

class ProductList extends Component
{
    #[Url()]
    public $search = '';
    // #[Url()]
    public $category = '';

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
        // $this->resetPage();
    }

    #[On('category')]
    public function updateCategory($category)
    {
        $this->category = $category;
        // $this->resetPage();
    }

    public function resetAll()
    {
        $this->reset('search');
        $this->reset('category');
        // $this->resetPage();
        $this->dispatch('resetAll');
    }

    #[Computed()]
    public function products()
    {
        $products = Product::with('riview', 'shop')
            ->where('name', 'like', '%' . $this->search . '%')
            ->when($this->category, function ($query) {
                return $query->where('category_id', $this->category);
            })
            ->limit(20)->get();

        foreach ($products as $product) {
            $totalStars = $product->riview->sum('star');
            $reviewCount = $product->riview->count();
            $product->avgRating = $reviewCount > 0 ? round($totalStars / $reviewCount, 1) : 0;
        }

        return $products;
    }

    public function render()
    {
        return view('livewire.product-list');
    }
}
