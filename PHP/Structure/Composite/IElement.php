<?php

/**
 * второй абстрактный класс, содержит в себе методы, 
 * необходимые для работы сложных объектов шаблона.
 * 
 * the second abstract class contains the methods 
 * necessary for the operation of complex template objects.
 */

abstract class IElement extends IEl
{
    protected $mas = [];
    abstract public function killM(IElement $el);
    abstract public function addEl(IElement $in);
}
