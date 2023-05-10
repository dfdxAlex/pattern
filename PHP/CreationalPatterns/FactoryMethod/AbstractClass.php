<?php
namespace PHP\CreationalPatterns\FactoryMethod;

/**
 * https://youtu.be/KrXFk6KwGv8
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
