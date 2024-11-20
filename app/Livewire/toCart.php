<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Reactive;

class toCart extends Component
{
    #[Reactive]
    public Product $product;

    public function toggleCart()
    {
        if (auth()->guest()) {
            $this->redirect(route('login', absolute: false), navigate: true);
        }

        $user = auth()->user();

        if ($user->hasCart($this->product)) {
            $user->toCart()->detach($this->product);
            return;
        }
        $user->savedProducts()->attach($this->product);
    }

    public function render()
    {
        return view('livewire.to-cart');
    }
}
