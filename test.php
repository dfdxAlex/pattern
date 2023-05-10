<?php

spl_autoload_register(function ($class_name) {
    $hablon='/[^\d\w]/';
    $class_name=preg_replace($hablon,DIRECTORY_SEPARATOR,$class_name);
    require $class_name . '.php';
  } 
  );

// просто псевдоним
use \PHP\CreationalPatterns\FactoryMethod as link;

$object = new link\Auto;

echo $object->message();






