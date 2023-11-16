<?php

class Point
{
    protected $point = 0;
    
    public function getPoint()
    {
        return $this->point;
    }

    public function setPoint($point)
    {
        $this->point = $point;
    }
}

final class ConstPoint extends Point
{
    public function __construct($point)
    {
        parent::setPoint($point);
    }

    public function setPoint($point)
    {
        return new ConstPoint($point);
    }
}
