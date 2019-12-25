<?php

namespace Alkoumi\CarbonDateTranslator;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class CarbonDateTranslatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //create alias
        AliasLoader::getInstance()->alias('TransDate', TransDate::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
