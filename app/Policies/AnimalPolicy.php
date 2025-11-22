<?php

namespace App\Policies;

use App\Models\Animal;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AnimalPolicy
{
    /**
     * Determines whether the user can mark the ad as resolved.
     */
    public function reunite(User $user, Animal $animal): bool
    {
        // CONDITION 1: User is admin OR owner of the ad
        $isAuthorized = $user->role === 'admin' || $user->id === $animal->user_id;

        // CONDITION 2: The ad must still be active (NOT 'reunited')
        $isActive = in_array($animal->status, ['lost', 'found']);

        // The button will only be displayed if BOTH conditions are true
        return $isAuthorized && $isActive;
    }

    /**
     * Determines whether the user can delete the ad.
     */
    public function delete(User $user, Animal $animal): bool
    {
        // Admin or owner can delete the ad at any time
        return $user->role === 'admin' || $user->id === $animal->user_id;
    }
}
