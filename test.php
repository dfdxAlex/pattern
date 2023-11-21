<?php

// use PHPUnit\Framework\TestCase;

include "PHP\Fundamental\MarkerInterface.php";

$array = [];

$array[] = new CarBMV('BMV');
$array[] = new Car('Merceder-Benz');
$array[] = new CarBMV('BMV');
$array[] = new Car('Merceder-Benz');
$array[] = new Car('Merceder-Benz');




foreach ($array as $val) {
    if ($val instanceof IMarker) {
        echo $val->car().'<br>';
    } else {
       
    }
}


// var_dump($array);
