<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Auth;

class SavedList extends Component
{
    public $products = [];

    #[On('savedProductUpdated')]
    public function mount()
    {
        $this->loadProducts();
    }

    public function loadProducts()
    {
        $this->products = Auth::user()->savedProducts;
    }

    public function render()
    {
        return view('livewire.saved-list', [
            'products' => $this->products,
        ]);
    }
}
