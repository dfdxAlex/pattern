<?php

class investor extends PropertyContainer
{
    public $apple;
    public $samsung;

    public function getTicket($ticket)
    {
        return $this->$ticket;
    }

    public function setTicket($ticket, $int)
    {
        $this->$ticket = $int;
    } 

    public function addTicket($ticket, $int)
    {
        $this->$ticket += $int;
    } 
}

class PropertyContainer
{
    private $masProperty = [];

    public function getTicketP($ticket)
    {
        return $this->masProperty[$ticket];
    }

    public function setTicketP($ticket, $int)
    {
        $this->masProperty[$ticket] = $int;
    } 

    public function addTicketP($ticket, $int)
    {
        $this->masProperty[$ticket] += $int;
    } 
}

$obj = new investor();

$obj->setTicketP('apple4',10);

$obj->addTicketP('apple4',5);

echo $obj->getTicketP('apple4');


