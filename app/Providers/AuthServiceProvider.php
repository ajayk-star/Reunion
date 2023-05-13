<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Branch;
use App\Models\BranchType;
use App\Models\User;
use App\Policies\BranchTypePolicy;
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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        BranchType::class => BranchTypePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        // register Passport::routes();
        Gate::define('create-event', [BranchTypePolicy::class, 'create']);

    }
}
