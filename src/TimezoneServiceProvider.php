<?php

namespace Signum\Timezone;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class TimezoneServiceProvider extends ServiceProvider{

    public function boot(Router $router){
        # Definition for where to read Views files (blades)
        $this->loadViewsFrom(base_path('/resources/views/signum/timezone/'),'timezone');

        # Files under Views ve Assets folders directory for publish is defined
        # Views
        $this->publishes([__DIR__.'/resources/views' => base_path('resources/views/signum/timezone')]);

        # CSS and others if exists for asset
        $this->publishes([__DIR__.'/resources/assets/css' => base_path('public/signum/timezone/css')]);

        # Configuration File publish
        $this->publishes([__DIR__.'/config' => base_path('config/')]);

        # Language Definition
        $this->loadTranslationsFrom(base_path('/resources/lang/signum/timezone/'),'timezone');
        $this->publishes([__DIR__.'/resources/lang'=>base_path('resources/lang/signum/timezone')]);

        $router->middleware('timezone_middleware',Http\Middleware\TimezoneMiddleware::class);

    }

    public function register(){
        # Route definition
        if(!$this->app->routesAreCached()){
            require __DIR__.'/Http/routes.php';
        }
        # Registering Controller
        $this->app->make("Signum\\Timezone\\Http\\Controllers\\TimezoneController");
    }
}