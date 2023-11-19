<?php

class Property
{
    private $a;

    public function __construct($a=5)
    {
        $this->a = $a;
    }

    public function getA()
    {
        return $this->a;
    }

    public function setA($a)
    {
        $this->a = $a;
    }
}

final class ConstProperty
{
    private $in;

    public function __construct($in)
    {
        $this->in = $in;
    }

    public function getA()
    {
        return $this->in->getA();
    }

    public function setA($a)
    {
        // $this->in->a = $a;
    }
}

$obj = new ConstProperty(new Property(124));

echo $obj->getA();
echo '<br>';
// $obj->setA(7);
echo '<br>';
echo $obj->getA();
