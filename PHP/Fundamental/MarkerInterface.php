<?php

interface IMarker
{

}

class Car
{
    public function __construct($model)
    {
        $this->model = $model;
    }
    public function car()
    {
        return $this->model;
    }
}

class CarBMV extends Car implements IMarker
{

}









class MarkerInterface implements IMarker
{
    public function car()
    {
        return "Машина продана";
    }
}

class NotMarkerInterface
{
    public function car()
    {
        return "Машина не продана";
    }
}
