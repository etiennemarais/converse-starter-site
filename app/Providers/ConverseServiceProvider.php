<?php namespace App\Providers;

use ConverseApi\Services\Content\ContentController;
use Illuminate\Support\ServiceProvider;

class ConverseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(storage_path() . '/app/Converse', 'Converse');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }
}