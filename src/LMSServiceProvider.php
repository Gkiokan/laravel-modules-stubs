<?php

namespace Gkiokan\LMS;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use File;

class LMSServiceProvider extends ServiceProvider
{

    // Booting
    public function boot()
    {
        $this->registerConfig();
    }


    // Registering
    public function register()
    {

    }


    // Register Config
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__ . '/../config/modules.php' => config_path('modules.php'),
        ], 'config');
    }


    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

}
