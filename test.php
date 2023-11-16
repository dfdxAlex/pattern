
<form>
    <input type="submit" name="button1" value="Кнопка 1">
    <input type="submit" name="button2" value="Кнопка 2">
    <input type="submit" name="button3" value="Кнопка 3">
</form>


<?php

include "PHP\Structure\FrontController.php";

$obj = new FrontController;
$obj->handleRequest();



