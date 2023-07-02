<?php

/**
 * первый абстрактный класс, содержит в себе методы, 
 * необходимые для всех объектов шаблона.
 * 
 * the first abstract class contains 
 * the methods required for all template objects.
 */
abstract class IEl
{
    public $name;
    public $m;
    abstract public function getM();
}
