<?php


namespace Memoye\Printer\Contracts;


interface Printer
{
    public function print($content);

    public function setPrinter(PrinterType $printerType);
}