<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function update(User $user, User $profileUser)
    {
        return $user->id === $profileUser->id;
    }

    // public function admin(User $user, User $)
    // {
    //     return $recipe->user->id === $user->id;
       
    // }
}
