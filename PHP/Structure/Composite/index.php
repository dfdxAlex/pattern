<?php

spl_autoload_register(function ($class_name) {
    $hablon='/[^\d\w]/';
    $class_name=preg_replace($hablon,DIRECTORY_SEPARATOR,$class_name);
    require $class_name . '.php';
  } 
  );


$apple = new Element('apple', 100);
$apple1 = new Element('apple', 120);

$box = new Box($apple1);
$box->addEl($apple1);
$box->addEl($apple1);
$box->addEl($apple1);
$box->addEl($apple1);
$box->addEl($apple1);

$box2 = new Box($box);
$box2->addEl($apple);
$box2->addEl($apple1);
$box2->addEl($box);
$box2->addEl($box);
$box2->addEl($box);
$box2->addEl($box);

$box3 = new Box($box2);
$box3->addEl($box2);
$box3->addEl($box2);
$box3->addEl($box2);
$box3->addEl($box2);


$rez = new Result(
  $box3
);

echo $rez->getM22();
