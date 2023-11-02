<?php

interface IMathPlus
{
  public function plusAB($property);
}

interface IProperty
{
  public function accept(IMathPlus $plus);
}

class Property implements IProperty
{
  public $a;
  public $b;

  public function __construct($a, $b)
  {
       $this->a = $a;
       $this->b = $b;
  }

  public function accept(IMathPlus $plus)
  {
      return $plus->plusAB($this);
  }
}

class MathPlus implements IMathPlus
{
    public function plusAB($property)
    {
      return $property->a + $property->b;
    }
}

class MathPlusTwo implements IMathPlus
{
    public function plusAB($property)
    {
      return ($property->a + $property->b)*2;
    }
}

$prop = new Property(10, 10);

$visiterTwo = new MathPlusTwo;

echo $prop->accept(new MathPlusTwo);
