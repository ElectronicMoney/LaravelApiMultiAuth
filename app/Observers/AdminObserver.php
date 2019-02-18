<?php

namespace App\Observers;

use App\Modela\Admin;

class AdminObserver
{
    /**
     * Handle the user "creating" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function creating(Admin $admin)
    {
        $admin->api_token = bin2hex(openssl_random_pseudo_bytes(30));
    }

    /**
     * Handle the admin "created" event.
     *
     * @param  \App\Modela\Admin  $admin
     * @return void
     */
    public function created(Admin $admin)
    {
        //
    }

    /**
     * Handle the admin "updated" event.
     *
     * @param  \App\Modela\Admin  $admin
     * @return void
     */
    public function updated(Admin $admin)
    {
        //
    }

    /**
     * Handle the admin "deleted" event.
     *
     * @param  \App\Modela\Admin  $admin
     * @return void
     */
    public function deleted(Admin $admin)
    {
        //
    }

    /**
     * Handle the admin "restored" event.
     *
     * @param  \App\Modela\Admin  $admin
     * @return void
     */
    public function restored(Admin $admin)
    {
        //
    }

    /**
     * Handle the admin "force deleted" event.
     *
     * @param  \App\Modela\Admin  $admin
     * @return void
     */
    public function forceDeleted(Admin $admin)
    {
        //
    }
}
