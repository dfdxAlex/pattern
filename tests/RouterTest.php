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



        $objRout2 = new Router(['button2'=>'']);
        $objRout2->setArr('button1','ControllerButtonOne');
        $objRout2->setArr('button2','ControllerButtonTwo');
        $objRout2->setArr('button3','ControllerButtonThree');
        
        $obj2 = new FrontController($objRout2);
        
        if ($obj2->getRez() == "Статья привязанная ко второй кнопке") $rezBool=true;
        else $rezBool=false;
        if (!$rezBool) return $this->assertTrue(false);

        
        $objRout3 = new Router(['button3'=>'']);
        $objRout3->setArr('button1','ControllerButtonOne');
        $objRout3->setArr('button2','ControllerButtonTwo');
        $objRout3->setArr('button3','ControllerButtonThree');
        
        $obj3 = new FrontController($objRout3);
        
        if ($obj3->getRez() == "Статья привязанная к третьей кнопке") $rezBool=true;
        else $rezBool=false;
        if (!$rezBool) return $this->assertTrue(false);
    } 
}
