<?php

interface IPoint
{
    public function setPoint($point);
    public function getPoint();
}

class Point
{
    protected $point=0;

    public function setPoint($point)
    {
        $this->point = $point;
    }

    public function getPoint()
    {
        return $this->point;
    }
}

interface IPointConst extends IPoint
{
    public function setPoint($point);
}

class PointConst extends Point implements IPointConst
{
    public function __construct($point)
    {
        $this->point = $point;
    }
    public function setPoint($point)
    {
        echo 'Класс - константа';
    }
}
