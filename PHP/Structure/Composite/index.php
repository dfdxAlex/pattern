<?php

spl_autoload_register(function ($class_name) {
    $hablon='/[^\d\w]/';
    $class_name=preg_replace($hablon,DIRECTORY_SEPARATOR,$class_name);
    require $class_name . '.php';
  } 
  );

$apple1 = new Element('apple',120);
$apple2 = new Element('apple',130);
$apple3 = new Element('apple',140);
$apple4 = new Element('apple',114);

$box1 = new Box($apple4,12);
$box2 = new Box($apple3,16);
$box3 = new Box($apple2,12);
$box4 = new Box($box1,18);

$result = new Result(
    $apple1,
    $apple2,
    $box1,
    $apple3,
    $box3,
    $box3,
    $box3,
    $apple4,
    $box2,
    $box4
);

// echo $result->getM();
$result->readM();
