<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Computed;

class CartList extends Component
{
    public $products;
    public $product;
    public $user;

    public function mount()
    {
        $this->user = auth()->user();
    }

    #[Computed]
    public function productItem()
    {
        return $this->user->toCart()->where('product_id', $this->product->id)->first();
    }

    #[On('refresh')]
    public function refresh()
    {
        return $this->products = auth()->user()->toCart()->get();
    }

    public function deleteItemCart()
    {
        if ($this->togglePlusMinus()) {
            $this->user->toCart()->detach($this->product->id);
        }
        $this->dispatch('refresh');
    }

    public function minusItemCart()
    {
        if ($this->togglePlusMinus()) {
            $cartItem = $this->productItem;

            if ($cartItem && $cartItem->pivot->qty > 1) {
                $this->user->toCart()->updateExistingPivot($this->product->id, [
                    'qty' => $cartItem->pivot->qty - 1,
                ]);
            }
        }
        $this->dispatch('refresh');
    }

    public function plusItemCart()
    {
        if ($this->togglePlusMinus()) {
            $cartItem = $this->productItem;

            if ($cartItem) {
                $this->user->toCart()->updateExistingPivot($this->product->id, [
                    'qty' => $cartItem->pivot->qty + 1,
                ]);
            }
        }
        $this->dispatch('refresh');
    }

    public function togglePlusMinus()
    {
        if (auth()->guest()) {
            $this->redirect(route('login'));
            return false;
        }
        return true;
    }

    #[Computed]
    public function totalPrice()
    {
        return $this->products->sum(function ($product) {
            return $product->pivot->qty * $product->price;
        });
    }

    public function render()
    {
        return view('livewire.cart-list');
    }
}
