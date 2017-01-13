<?php


namespace Memoye\Printer\Drivers;

use Memoye\Printer\Contracts\Printer;

class TestLog implements Printer
{

    public function print($content)
    {
        return "Stampato $content";
    }
}