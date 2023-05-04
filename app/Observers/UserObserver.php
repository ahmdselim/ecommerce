<?php

namespace App\Observers;

use App\Models\Group;
use App\Models\User;
use App\Models\UsersGroup;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        // $groups = Group::first();
        // $usersGroupModel = UsersGroup::create([
        //     "user_id" => $user->id,
        //     "group_id" => $groups->id,
        // ]);
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
