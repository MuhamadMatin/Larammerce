<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class SavedButton extends Component
{
    #[Reactive]
    public Product $product;

    public function toggleSaved()
    {
        if (auth()->guest()) {
            $this->redirect(route('login', absolute: false), navigate: true);
        } else {
            $user = auth()->user();

            if ($user->hasSaved($this->product)) {
                $user->savedProducts()->detach($this->product);
            } else {
                $user->savedProducts()->attach($this->product);
            }
        }
    }

    public function render()
    {
        return view('livewire.saved-button');
    }
}
