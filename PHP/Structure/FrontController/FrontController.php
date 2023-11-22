<?php

class FrontController
{
    public function __construct($in)
    {
        echo 'Создан FrontController<br>';

        $this->rez = $in->rout();
    }

    public function getRez()
    {
        return $this->rez;
    }
}



class Router
{
    private $arr = [];
    private $get;

    public function __construct($get)
    {
        $this->get = $get;
    }

    public function setArr($key, $val)
    {
        $this->arr[$key] = $val;
    }

    public function rout()
    {
        $obj = '';

        foreach($this->get as $key=>$val) {
            foreach($this->arr  as $keyMas=>$valMas) {
                if ($key == $keyMas) {
                    $obj = new $this->arr[$key];
                }
            }
        }

        if ($obj=='') $obj = new DefaultController;
        
        return $obj->controller();
    }
}




interface IController
{
    public function controller();
}

class DefaultController implements IController
{
    public function controller()
    {
        return 'Привет, Выберите вариант.';
    }
}

class ControllerButtonOne implements IController
{
    public function controller()
    {
        return 'Статья привязанная к первой кнопке';
    }
}

class ControllerButtonTwo implements IController
{
    public function controller()
    {
        return 'Статья привязанная ко второй кнопке';
    }
}

class ControllerButtonThree implements IController
{
    public function controller()
    {
        return 'Статья привязанная к третьей кнопке';
    }
}
