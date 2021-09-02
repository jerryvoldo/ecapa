<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;
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

        //
        Gate::define('login-perusahaan', function (User $user) {
            return $user->role_id === 10;
        });

        Gate::define('login-superadmin', function (User $user) {
            return $user->role_id === 1;
        });

        Gate::define('login-admin', function (User $user) {
            return $user->role_id === 3;
        });

        Gate::define('login-petugas', function (User $user) {
            return $user->role_id === 6;
        });
    }
}
