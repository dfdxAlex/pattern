<?php
namespace PHP\CreationalPatterns\AbstractFactory;

class FactoryRed implements IFactory
{
    public function listOne()
    {
        return new listOneRed;
    }

    public function listTwo()
    {
        return new ListTwoRed;
    }
}
