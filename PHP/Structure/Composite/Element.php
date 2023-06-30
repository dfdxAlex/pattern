<?php

class Element extends IElement
{
    public function __construct(string $name, int $m)
    {
        $this->name = $name;
        $this->m = $m;
    }

    public function getM()
    {
        return $this->m;
    }

    public function readM()
    {
        echo $this->name.'---'.$this->pieces;
    }
}
