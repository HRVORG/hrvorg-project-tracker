<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\RegisterApplication;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $register_provider = new RegisterApplication;

        foreach ($register_provider->register() as $value) {
            $this->registerService($value['service_name'], $value['service_class']);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    private function registerService($serviceName, $className) {
        $this->app->singleton($serviceName, function() use ($className) {
            return new $className;
        });
    }
}
