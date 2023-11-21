<?php

use PHPUnit\Framework\TestCase;

include "PHP\Fundamental\MarkerInterface.php";

class MarkerInterfaceTest extends TestCase
{
    /**
     * @test
     */
    public function markerInterface()
    {
        $array = [];
        $array[] = new CarBMV('BMV');
        $array[] = new Car('Merceder-Benz');
        $array[] = new CarBMV('BMV');
        $array[] = new Car('Merceder-Benz');
        $array[] = new CarBMV('BMV');
        $array[] = new Car('Merceder-Benz');

        foreach ($array as $val) {
            if ($val->model == "BMV") {
                if (!($val instanceof IMarker)) {
                    $this->assertTrue(false);
                }
            } 
        }
        $this->assertTrue(true);
    }
}
