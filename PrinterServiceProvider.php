<?php


namespace Memoye\Printer;


use Illuminate\Support\ServiceProvider;
use Memoye\Printer\Contracts\Printer;

class PrinterServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/printer.php' => config_path('printer.php'),
        ],'config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Printer::class, config('printer.driver'));

        $this->mergeConfigFrom(
            __DIR__.'/printer.php', 'printer'
        );
    }
}