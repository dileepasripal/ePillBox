<?php
// app/Providers/AuthServiceProvider.php

namespace App\Providers;

// ... other imports ...

class AuthServiceProvider extends ServiceProvider
{
    // ...

    public function boot()
    {
        $this->registerPolicies(); 

        // Ensure this section is WITHIN the boot() method
        Gate::before(function ($user, $ability) {
            return $user->hasRole('admin') ? true : null;
        });
    }

    // ...
}
