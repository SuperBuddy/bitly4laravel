<?php namespace SuperBuddy\Bitly4laravel;

use \Illuminate\Support\ServiceProvider;

class Laravel4ServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('superbuddy/bitly4laravel');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['bitly4laravel'] = $this->app->share(function($app) {
            $config = $app['config']->get('bitly4laravel::config');
            return new Bitly4laravel($config);
        });
    }

}
