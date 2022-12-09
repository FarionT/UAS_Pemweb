<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Order;
>>>>>>> backup

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
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

<<<<<<< HEAD
        //
=======
        Gate::define('see-all-order', function(User $user){
            return $user->role_id === 1;
        });

        Gate::define('create-order', function(User $user){
            return $user->accept === 1;
        });
        
        Gate::define('delete-order', function(User $user){
            return $user->role_id === 1;
        });

        Gate::define('update-status-order', function(User $user, Order $order){
            return $order->accept === 0;
        });
        
        // Gate::define('update-belongs-order', function(User $user, Order $order){
        //     return $user->id === $order->user_id;
        // });

>>>>>>> backup
    }
}
