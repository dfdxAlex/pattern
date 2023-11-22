<?php

class FrontController
{
    public function __construct($in)
    {
        echo 'Создан FrontController<br>';
        $in->setArr('button1','ControllerButtonOne');
        $in->setArr('button2','ControllerButtonTwo');
        $in->setArr('button3','ControllerButtonThree');
        $in->rout($_GET);
    }
}



class Router
{
    private $arr = [];

    public function setArr($key, $val)
    {
        $this->arr[$key] = $val;
    }

    public function rout($get)
    {
        $obj = '';

        foreach($get as $key=>$val) {
            foreach($this->arr  as $keyMas=>$valMas) {
                if ($key == $keyMas) {
                    $obj = new $this->arr[$key];
                }
            }
        }

        if ($obj=='') $obj = new DefaultController;

        echo $obj->controller();
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
