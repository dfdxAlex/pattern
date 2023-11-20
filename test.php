<?php

// use PHPUnit\Framework\TestCase;

include "PHP\Fundamental\MarkerInterface.php";

$array = [];

$array[] = new MarkerInterface();
$array[] = new NotMarkerInterface();
$array[] = new MarkerInterface();
$array[] = new MarkerInterface();
$array[] = new MarkerInterface();
$array[] = new NotMarkerInterface();
$array[] = new MarkerInterface();
$array[] = new NotMarkerInterface();

foreach ($array as $val) {
    if ($val instanceof IMarker) {
        echo $val->car().'<br>';
    } else {
       
    }
}


// var_dump($array);
