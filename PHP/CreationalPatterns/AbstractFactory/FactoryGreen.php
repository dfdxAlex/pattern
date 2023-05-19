<?php
namespace PHP\CreationalPatterns\AbstractFactory;

class FactoryGreen implements IFactory
{
    public function listOne()
    {
        return new ListOneGreen;
    }

    public function listTwo()
    {
        return new ListTwoGreen;
    }
}
