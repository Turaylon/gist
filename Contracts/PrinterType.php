<?php


namespace Memoye\Printer\Contracts;


interface PrinterType
{
    public function inizialize($settings);

    public function sendPrintJob($file);
}