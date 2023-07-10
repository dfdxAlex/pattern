<?php

class Discount5 extends DecoratorMoney
{
    public function returnMoney($s, $m)
    {
        return $this->in->returnMoney($s, $m)*0.95;
    }
}
