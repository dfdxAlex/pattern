<?php

use PHPUnit\Framework\TestCase;
include "src\Plus.php";

class TestPlus extends TestCase
{
    public function test_plus()
    {
        $obj = new Plus;
        $this->assertTrue($obj->plus(2,3));
    }
}
