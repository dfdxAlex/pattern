

<form >
<input type="submit" name="button1">
<input type="submit" name="button2">
<input type="submit" name="button3">
</form>


<?php
// use PHPUnit\Framework\TestCase;

include "PHP\Structure\FrontController\FrontController.php";

$objRout = new Router($_GET);
$objRout->setArr('button1','ControllerButtonOne');
$objRout->setArr('button2','ControllerButtonTwo');
$objRout->setArr('button3','ControllerButtonThree');

$obj = new FrontController($objRout);
