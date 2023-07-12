<?php

/**
 * Абстрактный класс просто принимает в качестве параметра 
 * любой объект типа IMoney.
 * Класс абстрактный потому, что он наследует другой абстрактный 
 * класс и не реализует абстрактные методы.
 * 
 * An abstract class simply takes as a parameter
 * any object of type IMoney.
 * A class is abstract because it inherits another abstract
 * class and does not implement abstract methods.
 */

abstract class DecoratorMoney implements IMoney
{
    protected $in;
    
    public function __construct(IMoney $in)
    {
        $this->in = $in;
    }
}
