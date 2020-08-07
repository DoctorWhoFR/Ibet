<?php

namespace App\Policies;

use App\User;
use App\Articles;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any articles.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the articles.
     *
     * @param  App\User  $user
     * @param  App\Articles  $articles
     * @return bool
     */
    public function view(User $user, Articles $articles)
    {
        return false;
    }

    /**
     * Determine whether the user can create a articles.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the articles.
     *
     * @param  App\User  $user
     * @param  App\Articles  $articles
     * @return bool
     */
    public function update(User $user, Articles $articles)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the articles.
     *
     * @param  App\User  $user
     * @param  App\Articles  $articles
     * @return bool
     */
    public function delete(User $user, Articles $articles)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the articles.
     *
     * @param  App\User  $user
     * @param  App\Articles  $articles
     * @return bool
     */
    public function restore(User $user, Articles $articles)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the articles.
     *
     * @param  App\User  $user
     * @param  App\Articles  $articles
     * @return bool
     */
    public function forceDelete(User $user, Articles $articles)
    {
        return false;
    }
}
