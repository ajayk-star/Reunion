<?php

namespace App\Observers;

use App\Models\BranchType;
use App\Models\User;

class TestingObserver
{
    /**
     * Handle the BranchType "created" event.
     */
    public function created(BranchType $branchType): void
    {
        $user = new User();
        $user->name = 'ajay';
        $user->email ='asdf@gmail.com';
        $user->password = '1234';
        $user->save();
    }

    /**
     * Handle the BranchType "updated" event.
     */
    public function updated(BranchType $branchType): void
    {
        //
    }

    /**
     * Handle the BranchType "deleted" event.
     */
    public function deleted(BranchType $branchType): void
    {
        //
    }

    /**
     * Handle the BranchType "restored" event.
     */
    public function restored(BranchType $branchType): void
    {
        //
    }

    /**
     * Handle the BranchType "force deleted" event.
     */
    public function forceDeleted(BranchType $branchType): void
    {
        //
    }
}
