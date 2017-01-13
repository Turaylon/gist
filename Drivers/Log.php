<?php


namespace Memoye\Printer\Drivers;

use Memoye\Printer\Contracts\Printer;
use Illuminate\Support\Facades\Log as Logger;

class Log implements Printer
{

    public function print($content)
    {

        Logger::info("stampato: $content");
        return "Loggato $content";
    }
}