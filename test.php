<?php

use PHPUnit\Framework\TestCase;
include "vendor\autoload.php";

class Plus
{
    public function plus($a,$b)
    {
        // return $a+$b;
        return true;
    }
}

$obj = new Plus;
$obj->test_plus();



