<?php

namespace App\Policies;

use App\Models\Statics;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StaticsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->can('view_any_statics');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\=Statics  $=Statics
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user)
    {
        return $user->can('view_statics');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('create_statics');

    }


    public function update(User $user, Statics $Statics)
    {
        return $user->can('update_statics');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\=Statics  $=Statics
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Statics $Statics)
    {
        return $user->can('delete_statics');

    }

    public function restore(User $user, Statics $Statics)
    {
        return $user->can('restore_statics');

    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\=Statics  $=Statics
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Statics $Statics)
    {
        //
    }
}
