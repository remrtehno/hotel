<?php

namespace App\Providers;

use App\Contact;
use App\Product;
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
        view()->composer('*', function ($view) {
            $contacts = Contact::first();

            $view->with('contact_info', [
                'products' => Product::all(),
                'phone' => $contacts->phone,
                'email' => $contacts->email,
            ]);

            $new_array = array_map(function ($obj) {
                return $obj['title'];
            }, Product::get()->toArray());

            $view->with('products_service', json_encode($new_array));
        });
    }
}
