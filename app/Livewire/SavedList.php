<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;

class SavedList extends Component
{
    #[Computed()]
    public function products()
    {
        return Auth::user()->savedProducts;
    }

    public function render()
    {
        return view('livewire.saved-list');
    }
}
