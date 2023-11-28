<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // if (Gate::define('update-profile', User $user)) {
        //     // Разрешено обновление профиля
        //     // Ваш код для обновления профиля
        // } else {
        //     abort(403, 'У вас нет прав для выполнения этого действия');
        // }
        

    }
}
