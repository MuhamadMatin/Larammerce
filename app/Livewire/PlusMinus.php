<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;

class PlusMinus extends Component
{
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

    public function render()
    {
        return view('livewire.plus-minus');
    }
}
