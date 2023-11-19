<?php

use PHPUnit\Framework\TestCase;
include "PHP\Fundamental\ImmutableWrapper.php";



class WrapperTest extends TestCase
{
    public function testWrapper()
    {
        $obj = new ConstProperty(new Property);

        $obj->setA(3333);

        if ($obj->getA() == 5) $this->assertTrue(true);
        else $this->assertTrue(false);
    }
}
