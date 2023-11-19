<?php


use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {
    public function testAddition() {
        $result = 2 + 2;
        $this->assertEquals(4, $result, 'Expected the sum to be 4');
    }

    public function testSubtraction() {
        $result = 5 - 3;
        $this->assertEquals(2, $result, 'Expected the difference to be 2');
    }
}

