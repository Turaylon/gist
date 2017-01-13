<?php


namespace Memoye\Printer\Drivers;

use Memoye\Printer\Contracts\Printer;
use Illuminate\Support\Facades\Log as Logger;
use Memoye\Printer\Contracts\PrinterType;

class Log implements Printer
{

    public function print($content)
    {

        Logger::info("stampato: $content");
        return "Loggato $content";
    }

    public function setPrinter(PrinterType $printerType)
    {
        // TODO: Implement setPrinter() method.
    }
}