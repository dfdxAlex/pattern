<?php

class FrontController
{
    public function __construct($in)
    {
        echo 'Создан FrontController<br>';
        $in->rout();
    }
}

class Router
{
    public function rout()
    {
        if (isset($_GET['button1']) 
            || isset($_GET['button2']) 
                || isset($_GET['button3'])) {

                       if (isset($_GET['button1'])) {
                           $obj = new ControllerButtonOne;
                       }

                       if (isset($_GET['button2'])) {
                           $obj = new ControllerButtonTwo;
                       }   

                       if (isset($_GET['button3'])) {
                           $obj = new ControllerButtonThree;
                       }   

                       } else {
                           $obj = new DefaultController;
                           
                       }
                       $obj->controller();
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
        echo 'Привет, Выберите вариант.';
    }
}

class ControllerButtonOne implements IController
{
    public function controller()
    {
        echo 'Статья привязанная к первой кнопке';
    }
}

class ControllerButtonTwo implements IController
{
    public function controller()
    {
        echo 'Статья привязанная ко второй кнопке';
    }
}

class ControllerButtonThree implements IController
{
    public function controller()
    {
        echo 'Статья привязанная к третьей кнопке';
    }
}
