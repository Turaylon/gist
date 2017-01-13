<?php


namespace Memoye\Printer\PrinterTypes;


use Memoye\Printer\Contracts\PrinterType;

class PrintNodePrinter implements PrinterType
{


    protected $settings;

    public function inizialize($settings)
    {
        $this->settings = json_decode($settings);

    }

    public function sendPrintJob($file)
    {

    }
}