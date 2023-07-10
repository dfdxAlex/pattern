<?php

abstract class DecoratorMoney implements IMoney
{
    protected $in;
    
    public function __construct(IMoney $in)
    {
        $this->in = $in;
    }
}
