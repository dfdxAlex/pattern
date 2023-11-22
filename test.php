

<form >
<input type="submit" name="button1">
<input type="submit" name="button2">
<input type="submit" name="button3">
</form>


<?php
// use PHPUnit\Framework\TestCase;

include "PHP\Structure\FrontController\FrontController.php";

$obj = new FrontController(new Router());
