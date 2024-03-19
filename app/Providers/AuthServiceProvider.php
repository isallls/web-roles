<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Facades\Gate;
// use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        Gate::define('admin',function(){
            if(Auth::user()->roles && Auth::check()) {
                return true;
            }
            return false;
        });
        
        Gate::define('owner',function() {
            if(Auth::user()->roles->role == 'owner' && Auth::check()){
                return true;
            }
            return false;
        });
    }
}
