<?php

use PHPUnit\Framework\TestCase;
include "PHP\Structure\FrontController\FrontController.php";



class RouterTest extends TestCase
{
    /**
     * @test
     */
    public function rout()
    {
        $rezBool = true;

        $objRout = new Router(['button1'=>'']);
        $objRout->setArr('button1','ControllerButtonOne');
        $objRout->setArr('button2','ControllerButtonTwo');
        $objRout->setArr('button3','ControllerButtonThree');
        
        $obj = new FrontController($objRout);
        
        if ($obj->getRez() == "Статья привязанная к первой кнопке") $rezBool=true;
        else $rezBool=false;
        if (!$rezBool) return $this->assertTrue(false);

        $objRout->setGet(['button2'=>'']);
        if ($objRout->rout() == "Статья привязанная ко второй кнопке") $rezBool=true;
        else $rezBool=false;
        if (!$rezBool) return $this->assertTrue(false);
        
        $objRout->setGet(['button3'=>'']);
        if ($objRout->rout() == "Статья привязанная к третьей кнопке") $rezBool=true;
        else $rezBool=false;
        if (!$rezBool) return $this->assertTrue(false);

        $objRout->setGet(['buton3'=>'']);
        if ($objRout->rout() == "Привет, Выберите вариант.") $rezBool=true;
        else $rezBool=false;
        if (!$rezBool) return $this->assertTrue(false);
    } 
}
