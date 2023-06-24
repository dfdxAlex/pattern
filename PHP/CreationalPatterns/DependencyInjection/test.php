<?php

  // вместо файла конфигурации
  define("test",3);

spl_autoload_register(function ($class_name) {
    $hablon='/[^\d\w]/';
    $class_name=preg_replace($hablon,DIRECTORY_SEPARATOR,$class_name);
    require $class_name . '.php';
  } 
  );

$class1 = new Test1;
$class2 = new Test2;
$class3 = new Test3;

 $sss = new DependencyInjection(
                                  $class1,
                                  $class2,
                                  $class3,
                               );

 $test3 = $sss->getTest(1);

 echo $class3->getTest();


