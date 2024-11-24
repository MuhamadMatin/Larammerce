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

    // Remove product from cart
    public function deleteItemCart($user)
    {
        $user->toCart()->detach($this->product);
    }

    public function toggleCart()
    {
        if (auth()->guest()) {
            $this->redirect(route('login', absolute: false), navigate: true);
        } else {
            $user = auth()->user();
            if ($user->hasCart($this->product)) {
                $this->deleteItemCart($user);
            } else {
                // Add product to the cart
                $user->toCart()->attach($this->product, ['qty' => +1]);
            }
        }
    }

    public function render()
    {
        return view('livewire.to-cart');
    }
}
