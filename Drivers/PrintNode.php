<?php


namespace Memoye\Printer\Drivers;


use Memoye\Printer\Contracts\Printer;
use Memoye\Printer\Contracts\PrinterType;
use PrintNode\Credentials;
use PrintNode\PrintJob;
use PrintNode\Request;

class PrintNode implements Printer
{
    /**
     * @var PrinterType
     */
    protected $printer;

    public function print($content)
    {
        //Todo: trasformare content in pdf

        $this->printer->sendPrintJob($content);
    }

    public function setPrinter(PrinterType $printerType)
    {
        $this->printer = $printerType;
    }
}