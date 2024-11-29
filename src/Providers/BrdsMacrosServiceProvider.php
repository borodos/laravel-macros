<?php

namespace Brds\LaravelMacros\Providers;

use Brds\LaravelMacros\Macros\CollectionMacros;
use Illuminate\Support\ServiceProvider;

class BrdsMacrosServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     */
    public function register(): void {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {
        new CollectionMacros();
    }
}