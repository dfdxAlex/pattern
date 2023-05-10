<?php
namespace PHP\CreationalPatterns\FactoryMethod;
/**
 * https://youtu.be/KrXFk6KwGv8
 * class to concrete implementation of changing methods
 * класс к конкретной реализацией изменяющихся методов
 */
class MotorBike extends AbstractClass
{
    public function choice()
    {
        return "MotorBike";
    }
}
