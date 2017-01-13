<?php


namespace Memoye\Printer\PrinterTypes;


use Illuminate\Contracts\Logging\Log;
use Memoye\Printer\Contracts\PrinterType;

class LogPrinter implements PrinterType
{


    protected $settings;

    public function inizialize($settings)
    {
        $this->settings = json_decode($settings);

    }

    public function sendPrintJob($file)
    {
        Log::info("stampato file: ". $file);
    }
}