<?php
namespace Lfbellante\ItalyRegions;
use Illuminate\Support\ServiceProvider;

class ItalyRegionsServiceProvider extends ServiceProvider
{
    /**
    * Publishes configuration file.
    *
    * @return  void
    */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/regions.php' => config_path('regions.php'),
        ], 'regions-config');
    }
    /**
    * Make config publishment optional by merging the config from the package.
    *
    * @return  void
    */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/regions.php',
            'regions-config'
        );
    }
}