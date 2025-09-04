<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use zoltantajti\LicenseValidator\Validator;
use zoltantajti\LicenseValidator\Renderer;

class LicenseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        if (php_sapi_name() !== 'cli') {
            
            $licensePath = storage_path('app/private/license.php');
            Validator::setLanguage('hu');
            Validator::setLicensePath($licensePath);
            Validator::verify();
        };
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
