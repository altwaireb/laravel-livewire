<?php

namespace App\Providers;

use App\Models\City;
use App\Models\Country;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Policies\CityPolicy;
use App\Policies\CountryPolicy;
use App\Policies\PermissionPolicy;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Permission::class   => PermissionPolicy::class,
        Role::class         => RolePolicy::class,
        Country::class      => CountryPolicy::class,
        City::class         => CityPolicy::class,
        User::class         => UserPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('browse_admin', fn(User $user) => $user->hasPermission('browse_admin'));
        Gate::define('administrator', fn(User $user) => $user->hasPermission('administrator'));
        Gate::define('banned', fn(User $user) => $user->hasPermission('banned'));

    }
}
