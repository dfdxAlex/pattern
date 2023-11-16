<?php

class FrontController
{
    public function handleRequest()
    {
        if (isset($_GET['button1']) 
            || isset($_GET['button2']) 
                || isset($_GET['button3'])) {

                       if (isset($_GET['button1'])) {
                           $obj = new ControllerButtonOne;
                           $obj->controllerButtonOne();
                       }

                       if (isset($_GET['button2'])) {
                           $obj = new ControllerButtonTwo;
                           $obj->controllerButtonTwo();
                       }   

                       if (isset($_GET['button3'])) {
                           $obj = new ControllerButtonThree;
                           $obj->controllerButtonThree();
                       }   

                       } else {
                           $obj = new DefaultController;
                           $obj->defaultController();
                       }
    }
}


class DefaultController
{
    public function defaultController()
    {
        echo 'Привет, Выберите вариант.';
    }
}

class ControllerButtonOne
{
    public function controllerButtonOne()
    {
        echo 'Статья привязанная к первой кнопке';
    }
}

class ControllerButtonTwo
{
    public function controllerButtonTwo()
    {
        echo 'Статья привязанная ко второй кнопке';
    }
}

class ControllerButtonThree
{
    public function controllerButtonThree()
    {
        echo 'Статья привязанная к третьей кнопке';
    }
}
