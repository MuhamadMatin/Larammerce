<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use Livewire\WithoutUrlPagination;

class UserList extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $search = '';

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
        $this->resetPage();
    }

    #[Computed()]
    public function users()
    {
        return User::where('name', 'like', '%' . $this->search . '%')
            ->paginate(20);
    }

    public function render()
    {
        return view('livewire.admin.user-list');
    }
}
