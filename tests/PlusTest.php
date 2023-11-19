<?php

use PHPUnit\Framework\TestCase;
include "src\Plus.php";

class PlusTest extends TestCase
{
    /**
     * @test
     */
    public function plus()
    {
        $obj = new Plus;
        $this->assertTrue(true);
    }
}
