<?php

class Box extends IElement
{
    public function __construct(IElement $in, int $pieces)
    {
        $this->name = $in->name;
        $this->m = $in->m;
        $this->pieces = $pieces;
    }
    public function getM()
    {
        return $this->m*$this->pieces;
    }

    public function readM()
    {
        echo $this->name.'---'.$pieces.'<br>';
    }
}
