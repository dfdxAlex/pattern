<?php
namespace PHP\CreationalPatterns\AbstractFactory;

class FactoryRed implements IFactory
{
    public function listOne()
    {
        return new ListOneRed;
    }

    public function listTwo()
    {
        return new ListTwoRed;
    }
}
