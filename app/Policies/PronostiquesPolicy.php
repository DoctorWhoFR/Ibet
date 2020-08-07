<?php

namespace App\Policies;

use App\User;
use App\Pronostiques;
use Illuminate\Auth\Access\HandlesAuthorization;

class PronostiquesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any pronostiques.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the pronostiques.
     *
     * @param  App\User  $user
     * @param  App\Pronostiques  $pronostiques
     * @return bool
     */
    public function view(User $user, Pronostiques $pronostiques)
    {
        return false;
    }

    /**
     * Determine whether the user can create a pronostiques.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the pronostiques.
     *
     * @param  App\User  $user
     * @param  App\Pronostiques  $pronostiques
     * @return bool
     */
    public function update(User $user, Pronostiques $pronostiques)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the pronostiques.
     *
     * @param  App\User  $user
     * @param  App\Pronostiques  $pronostiques
     * @return bool
     */
    public function delete(User $user, Pronostiques $pronostiques)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the pronostiques.
     *
     * @param  App\User  $user
     * @param  App\Pronostiques  $pronostiques
     * @return bool
     */
    public function restore(User $user, Pronostiques $pronostiques)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the pronostiques.
     *
     * @param  App\User  $user
     * @param  App\Pronostiques  $pronostiques
     * @return bool
     */
    public function forceDelete(User $user, Pronostiques $pronostiques)
    {
        return false;
    }
}
