<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Article;
use App\User;
use Auth;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isadmin', function ($user) {
            return $user->role_id == 1;
        });

        Gate::define('ismine', function ($user, $item) {
            return $item->user_id == Auth::user()->id || Auth::user()->role_id == 1;
        });

        Gate::define('isguest', function ($user) {
            return $user->role_id < 3;
        });
     
    }
}
