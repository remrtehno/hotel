<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('*', function ($view) {
            $contacts = Contacts::first();
            $view->with('contact_info', [
                'phone' => $contacts->phone,
                'email' => $contacts->email,
            ]);
        });
    }
}
