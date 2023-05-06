<?php

spl_autoload_register(function ($class_name) {
    $hablon='/[^\d\w]/';
    $class_name=preg_replace($hablon,DIRECTORY_SEPARATOR,$class_name);
    require $class_name . '.php';
  } 
  );

use \PHP\CreationalPatterns\SimpleFactory as link;

$obj = link\SimpleFactory::createObject(1)->gerInfo();
echo $obj;

$obj2 = link\SimpleFactory::createObject(1)->gerInfo();
echo $obj2;

$obj3 = link\SimpleFactory::createObject(3)->gerInfo();
echo $obj3;




