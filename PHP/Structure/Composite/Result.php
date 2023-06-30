<?php

class Result
{
    private $mas = [];

    public function __construct(IElement ...$params)
    {
        foreach($params as $val)
            array_push($this->mas,$val);
    }

    public function getM()
    {
        $rez = 0;
        foreach($this->mas as $value) {
            $rez+=$value->getM();
        }
        return $rez;
    }

    public function readM()
    {
        foreach($this->mas as $value) 
            echo $value->name.'---'.$value->pieces.'<br>';
    }
}
