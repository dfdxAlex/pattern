<?php

spl_autoload_register(function ($class_name) {
    $hablon='/[^\d\w]/';
    $class_name=preg_replace($hablon,DIRECTORY_SEPARATOR,$class_name);
    require $class_name . '.php';
  } 
  );

// просто псевдоним
use \PHP\CreationalPatterns\AbstractFactory as link;

/**
 * Создаем фабрику, не продукта.
 * По легенде в программе произошли какие-то события и было
 * принято решение создать именно такую фабрику
 */
$object = new link\FactoryRed;

/**
 * С помощью фабрики создаем конкретный объект
 * Это либо объект Список 1 или объект Список 2
 */
$list = $object->listTwo();

/**
 * Из созданного объекта вызываем стандартный метод
 */
$list->outList();






