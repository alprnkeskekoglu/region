<?php

namespace Dawnstar\Region;

use Illuminate\Support\ServiceProvider;

class RegionServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app['config']
            ->set("database.connections.dawnstar_region",
                [
                    'driver' => 'sqlite',
                    'database' => __DIR__ . '/Database/region.sqlite',
                    'prefix' => ''
                ]);
    }

    public function boot()
    {
        //
    }
}
