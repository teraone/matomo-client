<?php

namespace Teraone\MatomoClient;

use Illuminate\Support\ServiceProvider;

class MatomoClientServiceProvider extends ServiceProvider {
    /**
     * Bootstrap the application services.
     */
    public function boot() {
        if ( $this->app->runningInConsole() ) {
            $this->publishes( [
                __DIR__ . '/../config/config.php' => config_path( 'matomo-client.php' ),
            ], 'matomo-client' );

        }
    }

    /**
     * Register the application services.
     */
    public function register() {
        // Automatically apply the package configuration
        $this->mergeConfigFrom( __DIR__ . '/../config/config.php', 'matomo-client' );

        // Register the main class to use with the facade
        $this->app->singleton( 'matomo-client', function () {
            return new MatomoClient;
        } );
    }
}
