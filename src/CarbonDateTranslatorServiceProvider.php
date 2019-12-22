<?php

namespace Alkoumi\CarbonDateTranslator;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

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
        AliasLoader::getInstance()->alias("TransDate", Translator::class);
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
