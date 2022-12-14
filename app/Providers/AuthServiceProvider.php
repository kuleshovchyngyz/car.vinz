<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\AddedUser;
use App\Models\UserOperation;
use App\Policies\AddedUserPolicy;
use App\Policies\UserOperationPolicy;
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
        AddedUser::class => AddedUserPolicy::class,
        UserOperation::class => UserOperationPolicy::class,
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
    }
}
