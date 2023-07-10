<?php

class Discount10 extends DecoratorMoney
{
    public function returnMoney($s, $m)
    {
        return $this->in->returnMoney($s, $m)*0.90;
    }
}
