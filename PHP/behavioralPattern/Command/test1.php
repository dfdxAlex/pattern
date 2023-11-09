<?php

class TrafficLight
{
    public function onRed()
    {
        return 'On Red Color';
    }

    public function onYellow()
    {
        return 'On Yellow Color';
    }

    public function onGreen()
    {
        return 'On Green Color';
    }
}


abstract class OnColor
{
    abstract public function onColor();
    protected $in;
    public function __construct(TrafficLight $in)
    {
        $this->in = $in;
    }
}
class OnRed extends OnColor
{
    public function onColor()
    {
        return $this->in->onRed();
    }
}
class OnYellow extends OnColor
{
    public function onColor()
    {
        return $this->in->onYellow();
    }
}
class OnGreen extends OnColor
{
    public function onColor()
    {
        return $this->in->onGreen();
    }
}


class TrafficLightControll
{
    private $in;
    public function setColor(OnColor $in)
    {
        $this->in = $in;
    }

    public function pressButton()
    {
        echo $this->in->onColor();
    }

}

$trafficLight = new TrafficLight();

$onRed = new OnRed($trafficLight);
$onYellow = new OnYellow($trafficLight);
$onGreen = new OnGreen($trafficLight);

$trafficLightControll = new TrafficLightControll();

$trafficLightControll->setColor($onYellow);

$trafficLightControll->pressButton();




