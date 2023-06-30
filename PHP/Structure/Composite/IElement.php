<?php

abstract class IElement
{
    public $name;
    public $m;
    public $pieces=1;
    abstract public function getM();
    abstract public function readM();
}
