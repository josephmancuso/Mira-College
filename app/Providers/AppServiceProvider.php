<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Laravel\Dusk\DuskServiceProvider;

use App\Emails;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        \Validator::extend('email_domain', function($attribute, $value, $parameters, $validator) {
            
            $allowedEmailDomains = [];

            foreach(Emails::all() as $email) {
                $allowedEmailDomains[] = $email->email;
            }
            return in_array(explode('@', $parameters[0])[1], $allowedEmailDomains);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local', 'testing')) {
            $this->app->register(DuskServiceProvider::class);
        }        
    }
}
