<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * @var string|null
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     */
    public function map()
    {
        // Maps the routes defined in the routes/web.php file
        $this->mapWebRoutes();

        // Maps the routes defined in the routes/api.php file
        $this->mapApiRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web') // Applies the 'web' middleware group
            ->namespace($this->namespace) // Uses the namespace for controllers
            ->group(base_path('routes/web.php')); // Loads the routes/web.php file
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api') // Prefixes all routes with 'api/'
            ->middleware('api') // Applies the 'api' middleware group
            ->namespace($this->namespace) // Uses the namespace for controllers
            ->group(base_path('routes/api.php')); // Loads the routes/api.php file
    }
}
