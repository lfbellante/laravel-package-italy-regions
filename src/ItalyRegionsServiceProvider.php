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

        $this->publishes([
            __DIR__ . '/../database/migrations/create_regions_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_regions_table.php'),
          ], 'regions-migrations');
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