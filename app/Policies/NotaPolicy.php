<?php

namespace App\Policies;

use App\Models\Nota;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NotaPolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability)
    {
        if ($user->esProfesor()) {
            return true;
        }
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Nota $nota)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Nota $nota)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Nota $nota)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Nota $nota)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Nota $nota)
    {
        return false;
    }
}
