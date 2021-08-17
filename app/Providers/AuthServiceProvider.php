<?php

namespace App\Providers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define("admin", function(User $user){
            return $user->hasRole("admin");
        });

        Gate::define("visiteur", function(User $user){
            return $user->hasRole("visiteur");
        });

        Gate::define("employe", function(User $user){
            return $user->hasRole("employe");
        });

        Gate::define("superadmin", function(User $user, $roles){
            return $user->hasAnyRoles($roles);
        });
    }
}
