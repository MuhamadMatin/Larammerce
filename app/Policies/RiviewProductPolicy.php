<?php

namespace App\Policies;

use App\Models\RiviewProduct;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class RiviewProductPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_riview');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, RiviewProduct $riviewProduct): bool
    {
        return $user->can('view_riview');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_riview');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, RiviewProduct $riviewProduct): bool
    {
        return $user->can('update_riview');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, RiviewProduct $riviewProduct): bool
    {
        return $user->can('delete_riview');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, RiviewProduct $riviewProduct): bool
    {
        return $user->can('restore_riview');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, RiviewProduct $riviewProduct): bool
    {
        return $user->can('force_delete_riview');
    }
}
