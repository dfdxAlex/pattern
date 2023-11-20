<?php

interface IMarker
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
