<?php


namespace Memoye\Printer;


use Illuminate\Support\ServiceProvider;
use Memoye\Printer\Contracts\Printer;
use Memoye\Printer\PrinterTypes\PrintNodePrinter;

class PrinterServiceProvider extends ServiceProvider
{

    protected $availableService = [
        'printnode' => PrintNodePrinter::class
    ];

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
        // $app['Memoye\Printer\Contracts\Printer']
        // $app['printnode']
        $this->app->bind(Printer::class, config('printer.driver'));

        foreach ($this->availableService as $alias => $class){
            $this->app->bind($alias, $class);   // $app['printnode'] = PrintNodePrinter::class
        }

        $this->mergeConfigFrom(
            __DIR__.'/printer.php', 'printer'
        );
    }
}