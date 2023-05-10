<?php
namespace PHP\CreationalPatterns\FactoryMethod;

/**
 * The class in which there are common methods and
 * interface for alternative methods
 * Класс в котором находятся общие метода и 
 * интерфейс для альтернативных методов
 */
abstract class AbstractClass
{
    abstract public function choice();

    public function message():string
    {
        return "You select transport:".$this->choice();
    }
}
