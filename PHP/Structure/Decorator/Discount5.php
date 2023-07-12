<?php

/**
 * Данный класс наследует DecoratorMoney и преобразовывает
 * его метод returnMoney
 * 
 * This class inherits DecoratorMoney and converts
 * its returnMoney method
 */

class Discount5 extends DecoratorMoney
{
    public function returnMoney($s, $m)
    {
        return $this->in->returnMoney($s, $m)*0.95;
    }
}
