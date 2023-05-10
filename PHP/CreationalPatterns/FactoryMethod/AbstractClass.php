<?php
namespace PHP\CreationalPatterns\FactoryMethod;

abstract class AbstractClass
{
    abstract public function choice();

    public function message():string
    {
        return "You select transport:".$this->choice();
    }
}
