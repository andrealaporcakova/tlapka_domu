<?php

namespace App\Providers;


use App\Models\Animal;
use App\Policies\AnimalPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Animal::class => AnimalPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // 2. Definice nové brány pro admina
        Gate::define('access-admin-panel', function ($user) {
            return $user->role === 'admin';
        });
    }


}
