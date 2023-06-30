<?php

spl_autoload_register(function ($class_name) {
    $hablon='/[^\d\w]/';
    $class_name=preg_replace($hablon,DIRECTORY_SEPARATOR,$class_name);
    require $class_name . '.php';
  } 
  );

abstract class IElement
{
    public $name;
    public $m;
    public $pieces=1;
    abstract public function getM();
    abstract public function readM();
}

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


$apple1 = new Element('apple',120);
$apple2 = new Element('apple',130);
$apple3 = new Element('apple',140);
$apple4 = new Element('apple',114);

$box1 = new Box($apple4,12);
$box2 = new Box($apple3,16);
$box3 = new Box($apple2,12);
$box4 = new Box($box1,18);

$result = new Result(
    $apple1,
    $apple2,
    $box1,
    $apple3,
    $box3,
    $box3,
    $box3,
    $apple4,
    $box2,
    $box4
);

// echo $result->getM();
$result->readM();
