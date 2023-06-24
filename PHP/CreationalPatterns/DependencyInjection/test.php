<?php

  // вместо файла конфигурации
  define("test",3);

spl_autoload_register(function ($class_name) {
    $hablon='/[^\d\w]/';
    $class_name=preg_replace($hablon,DIRECTORY_SEPARATOR,$class_name);
    require $class_name . '.php';
  } 
  );


 
  $sss = ServiceLocator::getInstance()->getTest();
  echo $sss->getTest();
  echo '<br>';
  $sss = ServiceLocator::getInstance()->getTest();
  echo $sss->getTest();
  echo '<br>';
  $sss = ServiceLocator::getInstance()->getTest();

  echo $sss->getTest();

