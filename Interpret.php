<?php

interface Interpret
{
    public function interpret();
}

class TokenNumber implements Interpret
{
    private $val;
    public function __construct($val)
    {
        $this->val = $val;
    }
    public function interpret()
    {
        return $this->val;
    }
}

class TokenPlus implements Interpret
{
  private $val;
  public function __construct(array $array = [])
  {
      $this->val = $array[0]->interpret() + $array[1]->interpret();
  }
  public function interpret()
  {
      return $this->val;
  }
}

class TokenMinus implements Interpret
{
  private $val;
  public function __construct(array $array = [])
  {
      $this->val = $array[0]->interpret() - $array[1]->interpret();
  }
  public function interpret()
  {
      return $this->val;
  }
}
