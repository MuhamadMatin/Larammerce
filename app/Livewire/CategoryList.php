<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\On;

class CategoryList extends Component
{
    public $category = null;
    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function updatedCategory($categoryId)
    {
        $this->dispatch('category', category: $categoryId);
    }

    #[On('resetAll')]
    public function resetCategory()
    {
        $this->category = null;
    }

    public function render()
    {
        return view('livewire.category-list');
    }
}
