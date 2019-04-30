<?php

namespace App\Policies;

use App\User;
use App\Test;
use Illuminate\Auth\Access\HandlesAuthorization;

class TestPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the project.
     *
     * @param  \App\User  $user
     * @param  \App\Project  $project
     * @return mixed
     */
    public function update(User $user, Test $test)
    {
        return $test->owner_id == $user->id;
    }
}
