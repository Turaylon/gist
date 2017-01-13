<?php


namespace Memoye\Printer\Drivers;


use Memoye\Printer\Contracts\Printer;
use PrintNode\Credentials;
use PrintNode\PrintJob;
use PrintNode\Request;

class PrintNode implements Printer
{
    private $apiKey;
    private $request;

    function __construct()
    {
        $this->apiKey = config('printer.apy_key');

        $this->request = new Request($this->credentials);
    }

    public function setApiKey($apikey){
        $this->apiKey = $apikey;
        return $this;
    }

    public function print($content)
    {
        $printJob = new PrintJob();

    }

    private function getCredentials(){
        $credentials = new Credentials();
        return $credentials->setApiKey($this->apiKey);
    }
}